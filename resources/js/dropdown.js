let show = false;
let className =
    " flex absolute sm:right-28  sm:top-[65px]  rounded-lg sm:w-60 h-24 w-4/5  sm:h-60  bg-white/10  ";
    (
        function () {
            let profile = document.getElementById("profile");
            let dropDown = document.getElementById("dropdown");

            profile.addEventListener("click", function () {
                show = !show;
                if (show)
                    dropDown.className = "transition duration-300 " + className;
                else dropDown.className = "hidden transition duration-300";
            });
        }
    )();
