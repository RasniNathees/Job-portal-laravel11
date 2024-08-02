let isLogedin =true;
export const  logout = (logoutButton)=>{
  
    
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
   
    logoutButton.addEventListener('click',logout())

    async function logout(){
       if(isLogedin){
        const response = await fetch('/logout', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
         
        });
        isLogedin != response.ok
       }
        
    }
} 