
    // Input fields
    const email = document.getElementById('email');
    const password = document.getElementById('password');

    
    // Form
    const loginForm = document.getElementById('form1');
    // Validation colors
    
    // Handle form
    loginForm.addEventListener('submit', function(event) {
      // Prevent default behaviour
      event.preventDefault();
      if (
        validateLoginPassword() &&
        validateUsername()
      ) {
        loginForm.submit();
      }
    });
    
    // Validators
    
    
    function validateLoginPassword() {
      // Empty check
      if (checkIfEmpty(password)) return;
      // Must of in certain length
      if (!meetLength(password, 4, 100)) return;
      // check password against our character set
      // 1- a
      // 2- a 1
      // 3- A a 1
      // 4- A a 1 @
      //if (!containsCharacters(password, 4)) return;
      
      setValid(password);
      return true;
    }


    function validateUsername() {
        
      if (checkIfEmpty(email)) return;
      if (!containsCharacters(email, 5)) return;
      return true;
    }

    