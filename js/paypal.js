function post(path, params, method='post') {

    const form = document.createElement('form');
    form.method = method;
    form.action = path;

    for (const key in params) {
        if (params.hasOwnProperty(key)) {
            const hiddenField = document.createElement('input');
            hiddenField.type = 'hidden';
            hiddenField.name = key;
            hiddenField.value = params[key];

            form.appendChild(hiddenField);
        }
    }
    document.body.appendChild(form);
    form.submit();
}

paypal.Buttons({
    style: {
        shape: 'rect',
        color: 'gold',
        layout: 'vertical',
        label: '',

    },
    // Sets up the transaction when a payment button is clicked
    createOrder: (data, actions) => {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '49.0'
                }
            }]
        });
    },
    // Finalize the transaction after payer approval
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(orderData) {
            let output = orderData;
            output.sexe = 'h';
            output.poids = "82";
            post('programmes/verif.php', output, 'POST');
        });
    },

    onError: function(err) {
        console.log(err);
    }
}).render('#paypal-button-container');