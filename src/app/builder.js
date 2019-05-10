export class Builder {
    constructor() {
        this._files = [];
    }
    
    set files (data) {
        this._files = data;
    }
    
    get files () {
        return this._files;
    }
    
    update(files) {
        this.files = files;
        console.log(this.files);
        // var fr = new FileReader();
        //
        // fr.onload = function () {
        //     var img = document.createElement('img');
        //     img.src = fr.result;
        //     content.append(img);
        // };
        //
        // fr.readAsDataURL(file);
    }
}