let show = false;
let className =
    " flex absolute sm:right-28  sm:top-[65px]  rounded-lg sm:w-60 h-24 w-4/5  sm:h-60  bg-white/10  ";
// wanted to do this with js proxy when every time show variable change it reload the render 
(function () {
    // load element after page load
    let profile = document.getElementById("profile");
    let dropDown = document.getElementById("dropdown");

//    event listner for profile dropdown
    profile.addEventListener("click", function () {
        // console.log('profile clicked')
        show = !show;
      
        document.addEventListener("click", handelOutSide);
        if (show) {
            dropDown.className = "transition duration-300 " + className;
        } else {
            // console.log('event listner removed')
            document.removeEventListener("click", handelOutSide);
            dropDown.className = "hidden transition duration-300";
        }
    });

    const handelOutSide = (event) => {
        // console.log('event listner added ')
        if (!dropDown.contains(event.target) && event.target !== profile) {
            // console.log("outside click ");
            show = !show;
            document.removeEventListener("click", handelOutSide);
            dropDown.className = "hidden transition duration-300";
            // console.log("event listner removed");
        } 
    };

})();
