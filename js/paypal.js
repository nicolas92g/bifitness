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

const fundingSources = [
    paypal.FUNDING.PAYPAL,
    paypal.FUNDING.CREDIT,
    paypal.FUNDING.CARD
];

for (const fundingSource of fundingSources) {
    const paypalButtonsComponent = paypal.Buttons({
        fundingSource: fundingSource,

        // optional styling for buttons
        // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/

        style: {
            shape: "pill",
            height: 40,
            label: "subscribe"
        },

        // set up the recurring transaction
        createSubscription: (data, actions) => {
            // replace with your subscription plan id
            // https://developer.paypal.com/docs/subscriptions/#link-createplan
            return actions.subscription.create({
                plan_id: "P-3RX065706M3469222L5IFM4I"
            });
        },

        // notify the buyer that the subscription is successful
        onApprove: (data, actions) => {
            console.log(data);
            post("programmes/verif.php", results);
        },

        // handle unrecoverable errors
        onError: (err) => {

        }
    });

    if (paypalButtonsComponent.isEligible()) {
        paypalButtonsComponent
            .render("#paypal-button-container")
            .catch((err) => {

            });
    }
}