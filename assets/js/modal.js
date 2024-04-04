// JS adapted from https://dev.to/salehmubashar/create-an-image-modal-with-javascript-2lf3

let imgSrc;
let imgAlt;
// get images src onclick
window.addEventListener("load", function() {
    const images = document.querySelectorAll("img.clickable");
    images.forEach((img) => {
        img.addEventListener("click", (e) => {
            imgSrc = e.target.src;
            imgAlt = e.target.alt;
            //console.log(imgSrc);
            //run modal function
            imgModal(imgSrc, imgAlt);
        });
    });
}, false);
//creating the modal
let imgModal = (src, alt) => {
    const modal = document.createElement("div");
    modal.setAttribute("class", "modal");
    //add the modal to the main section or the parent element
    document.querySelector("body").append(modal);
    const imgWrapper = document.createElement("div");
    imgWrapper.setAttribute("class", "wrapper");
    //adding image to modal
    const newImage = document.createElement("img");

    // Finding the path to the full res image in wordpress. Bad form, but only being used in the short term
    // Specifically, seeing if file ends with '-123x456.jpg' and removing the dimensions to source the full-res version
    // There is definitely a better way to do this, and this will be properly implemented in the future
    const path = src.slice(0, src.lastIndexOf('/')+1); // finding image path
    const fileName = src.slice(src.lastIndexOf('/')+1); // finding image name
    const ext = fileName.slice(fileName.lastIndexOf('.')); // finding image extension
    const fileNameNoExt = fileName.slice(0, fileName.lastIndexOf('.'));
    
    /*
    console.log(path);
    console.log(fileName);
    console.log(ext);
    console.log(fileNameNoExt);
    */

    if (fileNameNoExt.indexOf('-') != -1) { // Testing to see if the filename contains a '-' character
        const prefix = fileNameNoExt.slice(0, fileNameNoExt.lastIndexOf('-'));
        const suffix = fileNameNoExt.slice(fileNameNoExt.lastIndexOf('-')+1);

        if (suffix.split('x').length == 2 && !isNaN(suffix.split('x')[0]) && !isNaN(suffix.split('x')[1])) {
            // create the new string
            const newPath = path + prefix + ext;
            newImage.setAttribute("src", newPath);
        } else {
            newImage.setAttribute("src", src);
        }
    } else {
        newImage.setAttribute("src", src);
    }

    /*
    const fileName = path[path.length-1];
    const ext = fileName.split('.');
    if (ext[0].indexOf('-') != -1) { // Testing to see if the filename contains a '-' character
        const suffix = ext[ext.length-1];
        if (suffix.split('x').length == 2 && !isNaN(suffix.split('x')[0]) && !isNaN(suffix.split('x')[2]) {
            // create the new string
            const newPath = 
        } else {
            newImage.setAttribute("src", src);
        }
    } else { // otherwise, use the normal source file
        newImage.setAttribute("src", src);
    }
    */
    newImage.setAttribute("alt", alt);

    //creating the close button
    const closeBtn = document.createElement("div");
    closeBtn.setAttribute("class", "close");
    //close function
    closeBtn.onclick = () => {
        modal.remove();
    };
    setTimeout(function() { // timeout allows time for image to load and get sized properly
        modal.append(imgWrapper);
        imgWrapper.append(closeBtn, newImage);
    }, 100);
};