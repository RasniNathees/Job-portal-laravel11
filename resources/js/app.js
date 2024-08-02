import './bootstrap';
// import '../css/app.css';
import.meta.glob([
    '../images/**'
]);
import {toggleProfileMenu} from  './dropdown'
import {logout} from './auth'
// import './from/form'



// wanted to do this with js proxy when every time show variable change it reload the render 
(function () {
    // load element after page load
  
    let toggleButton = document.getElementById("profile");
    let dropdownMenu = document.getElementById("dropdown");
    let logoutButton = document.getElementById("logout");
    toggleProfileMenu(toggleButton,dropdownMenu)
    // logout(logoutButton);

})();
