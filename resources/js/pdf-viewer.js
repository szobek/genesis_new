// PDF.js betöltése
if (document.querySelector('.pdf-canvas')) {
    const script = document.createElement('script');
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js';
    script.onload = function() {
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
        initAllPDFViewers();
    };
    document.head.appendChild(script);
}

function initAllPDFViewers() {
    // Minden PDF canvas-t inicializál
    const canvases = document.querySelectorAll('.pdf-canvas');
    
    canvases.forEach((canvas, index) => {
        const container = canvas.closest('.pdf-container');
        if (!container) return;

        const pdfUrl = canvas.dataset.pdfUrl;
        
        // Viewer objektum
        const viewer = {
            canvas: canvas,
            ctx: canvas.getContext('2d'),
            container: container,
            pdfDoc: null,
            pageNum: 1,
            pageRendering: false,
            pageNumPending: null,
            scale: 1.5,
            
            // Elemek
            prevBtn: container.querySelector('.pdf-prev'),
            nextBtn: container.querySelector('.pdf-next'),
            zoomInBtn: container.querySelector('.pdf-zoom-in'),
            zoomOutBtn: container.querySelector('.pdf-zoom-out'),
            pageNumSpan: container.querySelector('.pdf-page-num'),
            pageCountSpan: container.querySelector('.pdf-page-count'),
            zoomLevelSpan: container.querySelector('.pdf-zoom-level'),
            errorDiv: container.querySelector('.pdf-error'),
            loadingDiv: container.querySelector('.pdf-loading')
        };

        // Funkciók
        viewer.showError = function(message) {
            this.errorDiv.textContent = message;
            this.errorDiv.style.display = 'block';
            this.loadingDiv.style.display = 'none';
        };

        viewer.hideError = function() {
            this.errorDiv.style.display = 'none';
        };

        viewer.renderPage = function(num) {
            this.pageRendering = true;
            const self = this;
            
            this.pdfDoc.getPage(num).then(function(page) {
                const viewport = page.getViewport({ scale: self.scale });
                self.canvas.height = viewport.height;
                self.canvas.width = viewport.width;

                const renderContext = {
                    canvasContext: self.ctx,
                    viewport: viewport
                };

                const renderTask = page.render(renderContext);

                renderTask.promise.then(function() {
                    self.pageRendering = false;
                    if (self.pageNumPending !== null) {
                        self.renderPage(self.pageNumPending);
                        self.pageNumPending = null;
                    }
                });
            });

            this.pageNumSpan.textContent = num;
        };

        viewer.queueRenderPage = function(num) {
            if (this.pageRendering) {
                this.pageNumPending = num;
            } else {
                this.renderPage(num);
            }
        };

        viewer.onPrevPage = function() {
            if (this.pageNum <= 1) return;
            this.pageNum--;
            this.queueRenderPage(this.pageNum);
        };

        viewer.onNextPage = function() {
            if (this.pageNum >= this.pdfDoc.numPages) return;
            this.pageNum++;
            this.queueRenderPage(this.pageNum);
        };

        viewer.onZoomIn = function() {
            this.scale += 0.25;
            this.updateZoomLevel();
            this.queueRenderPage(this.pageNum);
        };

        viewer.onZoomOut = function() {
            if (this.scale <= 0.5) return;
            this.scale -= 0.25;
            this.updateZoomLevel();
            this.queueRenderPage(this.pageNum);
        };

        viewer.updateZoomLevel = function() {
            this.zoomLevelSpan.textContent = Math.round(this.scale * 100);
        };

        viewer.loadPDF = function(source) {
            if (!source) {
                this.showError('Nincs megadva PDF fájl!');
                return;
            }

            this.hideError();
            this.loadingDiv.style.display = 'block';

            const self = this;

            pdfjsLib.getDocument(source).promise.then(function(pdf) {
                self.pdfDoc = pdf;
                self.pageCountSpan.textContent = pdf.numPages;
                self.loadingDiv.style.display = 'none';

                self.prevBtn.disabled = false;
                self.nextBtn.disabled = false;
                self.zoomInBtn.disabled = false;
                self.zoomOutBtn.disabled = false;

                self.renderPage(self.pageNum);
            }).catch(function(error) {
                self.showError('Hiba a PDF betöltése során: ' + error.message);
                console.error(error);
            });
        };

        // Event listenerek
        viewer.prevBtn.addEventListener('click', () => viewer.onPrevPage());
        viewer.nextBtn.addEventListener('click', () => viewer.onNextPage());
        viewer.zoomInBtn.addEventListener('click', () => viewer.onZoomIn());
        viewer.zoomOutBtn.addEventListener('click', () => viewer.onZoomOut());

        // Kezdeti letiltás
        viewer.prevBtn.disabled = true;
        viewer.nextBtn.disabled = true;
        viewer.zoomInBtn.disabled = true;
        viewer.zoomOutBtn.disabled = true;

        // PDF betöltése
        if (pdfUrl) {
            viewer.loadPDF(pdfUrl);
        }
    });
}