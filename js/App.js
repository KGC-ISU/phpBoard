class App {
    constructor() {

        this.visualSection = document.querySelector(".visual");
        window.addEventListener("resize", this.resizeHandle.bind(this));
        this.resizeHandle();

    }

    resizeHandle(e){
        let height = window.innerHeight - 65;
        this.visualSection.style.height = height + 'px';
    }

}

window.onload = function() {
    let app = new App();
}