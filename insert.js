/*paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01'
          }
        }]
      });
    }
  }).render('#paypal-button-container');
  
*/


  //receiving conformation
    paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
      	purchase_units: [{
          amount: {
            value: k
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return window.location.replace("/SWE/success.php?opt="+opt);
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
