let show = false;
let className =
    " flex absolute sm:right-28  sm:top-[65px]  rounded-lg sm:w-60 h-24 w-4/5  sm:h-60  bg-white/10  ";
export const toggleProfileMenu = (toggleButton, dropdownMenu) => {
    toggleButton.addEventListener("click", function () {
        // console.log('profile clicked')
        show = !show;

       
        if (show) {
            dropdownMenu.className = "transition duration-300 " + className;
            document.addEventListener("click", handelOutSide);
        } else {
            // console.log('event listner removed')
            document.removeEventListener("click", handelOutSide);
            dropdownMenu.className = "hidden transition duration-300";
        }
    });

    const handelOutSide = (event) => {
        // console.log('event listner added ')
        if (
            !dropdownMenu.contains(event.target) &&
            event.target !== toggleButton
        ) {
            // console.log("outside click ");
            show = !show;
            document.removeEventListener("click", handelOutSide);
            dropdownMenu.className = "hidden transition duration-300";
            // console.log("event listner removed");
        }
    };
};
