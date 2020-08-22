<script>
jQuery(document).ready(function($) {
    /**
     * Initialization scripts
     */
    _init = () => {
        $(".datatables").not(".dummy").DataTable();
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
                case "/user/bantuan.php":
                    pageTitle.html("Bantuan");
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

        const size = dummy.attr("modal-size");
        console.log(size);
        if(typeof size !== "undefined") $(".modal-dialog").addClass(size);
        if(typeof dummy.attr("no-footer") !== "undefined" && dummy.attr("no-footer") === "1") $(".modal-footer").remove();
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

     $(".show-invoice").click((e)=>{
         const dummy = $(".invoice-dummy").clone().removeClass("hidden");
         appendModalContent(dummy);

         const transactionData = JSON.parse($(e.target).attr("transaction-data"));
         transactionData['act'] = 'getInvoiceDetail';
         console.log(transactionData);
         $("#modal .dl-invoice-form input[name='transactionData']").val(JSON.stringify(transactionData));

         $(".modal #order_id").html(transactionData['order_id']);
         $(".modal #order_date").html(transactionData['order_date']);

         let table = $(".modal .invoice-table").DataTable();

         doAjax(
             '<?php echo constant("BASE_URL") ?>/assets/ajax.php',
             transactionData,
             (res) => {
                 let totalBeforeTax = 0.0;
                 let totalTax = 0.0;
                 let totalAfterTax = 0.0;
                res.forEach((item, idx)=>{
                    console.log(item);
                    table.row.add([
                        idx+1,
                        item['item_name'],
                        item['order_item_quantity'],
                        item['order_item_price'],
                        item['order_item_actual_amount'],
                        item['order_item_tax1_rate'],
                        item['order_item_tax1_amount'],
                        item['order_item_final_amount']
                    ]).draw();
                    totalBeforeTax += parseFloat(item['order_item_actual_amount']);
                    totalTax += parseFloat(item['order_item_tax1_amount']);
                    totalAfterTax += parseFloat(item['order_item_final_amount']);
                })
                $(".modal .invoice-table #totalBeforeTax").text(totalBeforeTax.toFixed(2));
                $(".modal .invoice-table #totalTax").text(totalTax.toFixed(2));
                $(".modal .invoice-table #totalAfterTax").text(totalAfterTax.toFixed(2));
             }
         )
     });

     $("#modal").on("click", ".dl-invoice", (e)=>{
         e.preventDefault();
         const parent = $(e.target).closest("#modal");
         let form = parent.find(".dl-invoice-form");
         form.submit();
     });

     $(".thank-you").click(()=>{
         const dummy = $(".thankyou-dummy").clone().removeClass("hidden");
         appendModalContent(dummy);

         var str= $("#kritikSaran").val();
         <?php
            if(isset($_SESSION['userid'])){
                ?>
                var idUser="<?php echo $_SESSION['userid'];?>";
                <?php
            }
         ?>
         // var idUser = "<php if(isset($_SESSION['userid'])){echo $_SESSION['userid']};?>";
         console.log(str,idUser);

         $.ajax({
             url:"<?php echo constant("BASE_URL") ?>/assets/ajax.php",
             type:'post',
             data:{
                 act: 'kritiksaran',
                 idUser: idUser,
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
                doAjax("<?php echo constant("BASE_URL") ?>/assets/ajax.php", data, function(response){
                    console.log(response);
                    if(response["status"]==-1){
                        alert(response["message"]);
                    }
                    else{
                        location.href="/user";
                    }
                })
                break;
             case 'signup':
                if($("#password").val()!=$("#confirm_pass").val()){
                    alert("Password dan Konfirmasi Password tidak sama");
                    break;
                }
                var data={};
                data['act']='signup';
                data['nama_lengkap']=$("#nama_lengkap").val();
                data['username']=$("#nama_akun").val();
                data['mobile_number']=$("#handphone").val();
                data['email']=$("#email").val();
                data['password']=$("#password").val();
                data['address']=$("#alamat").val();
                // console.log(data);
                doAjax("<?php echo constant("BASE_URL") ?>/assets/ajax.php", data, function(response){
                    // console.log(response);
                    if(response["status"]==-1){
                        alert(response["message"]);
                    }
                    else{
                        location.href="/user";
                    }
                })
                 break;

         }

     });

     $("#buttonLogout").click(function(){
        console.log("clicked bangsat");
        var data={};
        data["act"]='logout';

        doAjax('<?php echo constant('BASE_URL') ?>/assets/ajax.php', data, function(response){
            console.log(response);
            if(response["status"]==-1){
                alert(response["message"]);
            }
            else{
                location.href="/user";
            }
        })
     })

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

    $(".calc-count").click(()=>{
        let tbd = $(".calc-table tbody");
        // tbd.empty();
        const form = $(".calc-form");
        if(form.find("#jenisBarang").val() === null) {
            alert("Mohon pilih jenis barang terlebih dahulu!");
        } else {
            const jb = form.find("#jenisBarang");
            const berat = form.find("#berat");
            let calculate = parseInt(jb.val()) * parseInt(berat.val());
            tbd.find('#ct-jenis').html(jb.find("option:selected").text());
            tbd.find('#ct-harga').html(jb.val());
            tbd.find('#ct-berat').html(berat.val());
            tbd.find('#ct-total').html(calculate);
        }
    })
})
</script>
