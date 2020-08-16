jQuery(document).ready(function($) {
    /**
     * Initialization scripts
     */
    _init = () => {
        $(".datatables").DataTable();
        const pathname = window.location.pathname;
        if(pathname !== "/") {
            let pageTitle = $(".page-title");
            switch (pathname) {
                case "/about.php":
                    pageTitle.html("About Us");
                    break;
                case "/calculator.php":
                    pageTitle.html("Mull Calculator");
                    break;
                case "/critics.php":
                    pageTitle.html("Kritik & Saran");
                    break;
                case "/locator.php":
                    pageTitle.html("Location");
                    break;
                case "/transaction.php":
                    pageTitle.html("Transaction History");
                    break;
            }
        }
    }
    _init();

    resetModal = () => {
        $(".modal-title, .modal-body, .modal-footer").empty();
    }

    appendModalContent = (dummy) => {
        resetModal();
        $(".modal-title").html(dummy.find(".dummy-title").removeClass("dummy-title"));
        $(".modal-body").append(dummy.find(".dummy-body").removeClass("dummy-body"));
        $(".modal-footer").append(dummy.find(".dummy-footer").removeClass("dummy-footer"));
    }

    doAjax = (url, data, callback) => {
        $.ajax({
            url: url,
            data: data,
            success: callback
        });
    }

    /**
     * Log In
     */
     $(".log-in").click(()=>{
         const dummy = $(".login-dummy").clone().removeClass("hidden");
         appendModalContent(dummy);
     });

    /**
     * Sign Up
     */
     $(".sign-up").click(()=>{
         const dummy = $(".signup-dummy").clone().removeClass("hidden");
         appendModalContent(dummy);
     });

     $("#modal").on('click', '.proceed', (e)=>{
         const $this = $(e.target);
         const form = $this.closest(".modal-content").find("form");
         const act = $this.attr("act");
         switch (act) {
             case 'login':

                 break;
             case 'signup':

                 break;

         }

     });


})
