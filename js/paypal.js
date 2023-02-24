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
        shape: 'pill',
        color: 'gold',
        layout: 'vertical',
        label: 'paypal',

    },

    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"EUR","value":0.01}}]
        });
    },

    onApprove: function(data, actions) {
        return actions.order.capture().then(function(orderData) {
            post("programmes/verif.php", results);
        });
    },

    onError: function(err) {
        console.log(err);
    }
}).render('#paypal-button-container');