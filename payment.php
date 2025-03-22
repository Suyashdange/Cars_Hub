<?php
include "connection.php";
if(isset($_POST['submit'])){
$id = "" . rand(1111, 9999);
$cn = $_POST['cname'];
$mob = $_POST['mob'];
$add = $_POST['add'];
$email = $_POST['email'];
$pname = $_POST['pname'];
$odate = $_POST['odate'];
$price = $_POST['price'];
$Quantity = $_POST['Quantity'];
$tprice = $_POST['tprice'];
$category = $_POST['category'];
$sta = "Ordered";
$pay = "Unpaid";
$sql = "insert into orders values ('$id','$cn','$mob','$add','$email','$pname','$odate','$price','$Quantity','$tprice','$category','$sta','$pay')";
$result = mysqli_query($con, $sql);
}
?>

       <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
          var options = {
            "key": "rzp_test_oVaIPSA2Nxz9FN", // Enter the Key ID generated from the Dashboard
            "amount": <?php echo $tprice;?> * 80 *100 ,
            "currency": "INR",
            "description": "Carshub",
            "image": "logo1.png",
            "prefill":
            {
              "email": " ",
              "contact": " ",
            },
            config: {
              display: {
                blocks: {
                  utib: { //name for Axis block
                    name: "Pay using ",
                    instruments: [
                      {
                        method: "card",
                        issuers: ["UTIB"]
                      },
                      {
                        method: "netbanking",
                        banks: ["UTIB"]
                      },
                      {
                        method: 'wallet',
                        wallets: ['freecharge']
                        },
                        {
                        method: 'upi'
                        },
                    ]
                  },
                  other: { //  name for other block
                    name: "Other Payment modes",
                    instruments: [
                      {
                        method: "card",
                        issuers: ["ICIC"]
                      },
                      {
                        method: 'netbanking',
                      },
                      {
                        method: 'upi'
                        }
                    ]
                  }
                },
                sequence: ["block.utib", "block.other"],
                preferences: {
                  show_default_blocks: false // Should Checkout show its default blocks?
                }
              }
            },
            "handler": function (response) {
              alert(response.razorpay_payment_id);
            },
            "modal": {
              "ondismiss": function () {
                if (confirm("Are you sure, you want to close the form?")) {
                  txt = "You pressed OK!";
                  console.log("Checkout form closed by the user");
                  window.location.href='home.php';
                } else {
                  txt = "You pressed Cancel!";
                  console.log("Complete the Payment");
                  window.location.href='home.php';
                }
              }
            }
          };
          var rzp1 = new Razorpay(options);
          window.onload = function (e) {
            rzp1.open();
            e.preventDefault();
          }
        </script>