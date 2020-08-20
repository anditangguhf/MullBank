<script>
jQuery(document).ready(function($) {
    /**
     * Initialization scripts
     */
    _init = () => {
        $(".datatables").DataTable();
        const pathname = window.location.pathname;
        console.log(pathname);
        if(pathname !== "/user") {
            let pageTitle = $(".page-title");
            switch (pathname) {
                case "/user/about.php":
                    pageTitle.html("About Us");
                    break;
                case "/user/calculator.php":
                    pageTitle.html("Mull Calculator");
                    break;
                case "/user/critics.php":
                    pageTitle.html("Kritik & Saran");
                    break;
                case "/user/locator.php":
                    pageTitle.html("Location");
                    break;
                case "/user/transaction.php":
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
            type: 'post',
            dataType: 'json',
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

     $(".thank-you").click(()=>{
         const dummy = $(".thankyou-dummy").clone().removeClass("hidden");
         appendModalContent(dummy);

         var str= $("#kritikSaran").val();
         var idUser = "<?php echo $_SESSION['userid'];?>";
         console.log(str,idUser);

         $.ajax({
             url:"assets/ajax.php",
             type:'post',
             data:{
                 act: 'kritiksaran',
                 textbox: str,
             },
             success:function(res){
                 console.log(res);
             },
         })
     });

     $("#modal").on('click','.tulis-komentar',()=>{
         $("#kritikSaran").val("");
     })

     $(".tulis-komentar").click(()=>{
         $("#kritikSaran").val("");
     })

     $("#modal").on('click', '.proceed', (e)=>{
         const $this = $(e.target);
         const form = $this.closest(".modal-content").find("form");
         const act = $this.attr("act");
         switch (act) {
             case 'login':
                var data={};

                data['act']='login';
                data['username']=$("#usernameLogin").val();
                data['password']=$("#passwordLogin").val();

                // console.log(data);
                doAjax('assets/ajax.php', data, function(response){
                    console.log(response);
                    if(response["status"]==-1){
                        alert(response["message"]);
                    }
                    else{
                        location.reload();
                    }
                })
                break;
             case 'signup':

                 break;

         }

     });

     $(".navbarItems").mouseover(function(){
        var navbarFont="#"+this.id+"Font";
        $(navbarFont).removeClass("d-none");
        $(navbarFont).addClass("d-inline-block");
    })

    $(".navbarItems").mouseleave(function(){
        var navbarFont="#"+this.id+"Font";
        $(navbarFont).removeClass("d-inline-block");
        $(navbarFont).addClass("d-none");
    })
})
</script>
