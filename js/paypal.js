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
        color: 'blue',
        layout: 'vertical',
        label: 'subscribe'
    },
    createSubscription: function(data, actions) {
        return actions.subscription.create({
            /* Creates the subscription */
            plan_id: 'P-4S598466X5491002MMOZLSHQ'
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(orderData) {
            let output = orderData;
            output.test = "test";
            post('programmes/verif.php', output, 'POST');
        });
    }
}).render('#paypal-button-container-P-4S598466X5491002MMOZLSHQ'); // Renders the PayPal button