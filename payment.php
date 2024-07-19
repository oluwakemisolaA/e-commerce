
<script src="https://dropin.vpay.africa/dropin/v1/initialise.js"></script>


<script>
            (() => {
                const options = {
                    amount: <?php echo $row['price']; ?>,
                    currency: 'NGN',
                    domain: 'sandbox',
                    key: '686713dc-05c3-46f9-b7a0-045816a4c065',
                    email: <?php echo $row['email']; ?>,
                    transactionref: '<?php echo $row['transaction_uin']; ?>',
                    customer_logo:'https://www.vpay.africa/static/media/vpayLogo.91e11322.svg',
                    customer_service_channel: '+2349070018275, josephabiodun79@gmail.com',
                    txn_charge: 6,
                    txn_charge_type: 'flat',
                    onSuccess: function(response) { console.log('Hello World!', response.message); },
                    onExit: function(response) { console.log('Hello World!', response.message); }
                }
                
                if(window.VPayDropin){
                    const {open, exit} = VPayDropin.create(options);
                    open();                    
                }                
            })();
        </script>
