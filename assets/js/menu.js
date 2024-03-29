var prevScrollPos = window.scrollY;
var maxScrollPos = window.scrollY;
var hidden = false;

var hamburgerHidden = true;

window.onscroll = function() {
    var currentScrollPos = window.scrollY;

    if (prevScrollPos > currentScrollPos) {
        maxScrollPos = currentScrollPos;
        if (hidden) document.getElementById("navbar").style.top = "0"; // only modify css if already hidden
    } else if (currentScrollPos > maxScrollPos + 40) {
        document.getElementById("navbar").style.top = "-100px";
        hidden = true;
        if (window.innerWidth <= 768) {
            document.getElementById("navLinks").style.visibility = "hidden";
            document.getElementById("navLinks").style.opacity = "0%";
            hamburgerHidden = true;
        }
    }

    prevScrollPos = currentScrollPos;
}

window.onload = function() {
    document.getElementById("hamburgerButton").addEventListener("click", (e) => {
        if (hamburgerHidden) {
            document.getElementById("navLinks").style.visibility = "visible";
            document.getElementById("navLinks").style.opacity = "100%";
            hamburgerHidden = false;
        } else {
            document.getElementById("navLinks").style.visibility = "hidden";
            document.getElementById("navLinks").style.opacity = "0%";
            hamburgerHidden = true;
        }
    });
}



onresize = (event) => {
    if (window.innerWidth > 768 && hamburgerHidden) {
        document.getElementById("navLinks").style.visibility = "visible";
        document.getElementById("navLinks").style.opacity = "100%";
        hamburgerHidden = false;
    } else if (window.innerWidth <= 768 && !hamburgerHidden) {
        document.getElementById("navLinks").style.transition = "opacity 0s, visibility 0s";
        document.getElementById("navLinks").style.visibility = "hidden";
        document.getElementById("navLinks").style.opacity = "0%";
        hamburgerHidden = true;
        setTimeout(function() {
            document.getElementById("navLinks").style.transition = "opacity 0.3s, visibility 0.3s";
        }, 100);
        
    }
}