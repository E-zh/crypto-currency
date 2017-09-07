var apiTest = new Vue({
    el: '#result',
    data: {
        test: ''
    },
    methods: {
        sendFormOrderBook: function (e) {
            var dataForm = $("#orderbook").serialize();
            var formAction = e.target.action;
            var self = this;
            e.preventDefault();
            $("#oBookButton").button('loading');
            $.ajax({
                type: "POST",
                url: formAction,
                data: dataForm,
                dataType: "json",
                success: function (data) {
                    self.test = '';
                    self.test = data;
                    $("#oBookButton").button('reset');
                },
                error: function () {
                    $("#oBookButton").button('reset');
                    alert('Service is temporarily unavailable! Try again later.');
                }
            });
        },
        sendFormTicker: function (e) {
            var dataForm = $("#ticker").serialize();
            var formAction = e.target.action;
            var self = this;
            e.preventDefault();
            $("#oTickerButton").button('loading');
            $.ajax({
                type: "POST",
                url: formAction,
                data: dataForm,
                dataType: "json",
                success: function (data) {
                    self.test = '';
                    self.test = data;
                    $("#oTickerButton").button('reset');
                },
                error: function () {
                    $("#oTickerButton").button('reset');
                    alert('Service is temporarily unavailable! Try again later.');
                }
            });
        },
        sendFormHistory: function (e) {
            var dataForm = $("#history").serialize();
            var formAction = e.target.action;
            var self = this;
            e.preventDefault();
            $("#oHistoryButton").button('loading');
            $.ajax({
                type: "POST",
                url: formAction,
                data: dataForm,
                dataType: "json",
                success: function (data) {
                    self.test = '';
                    self.test = data;
                    $("#oHistoryButton").button('reset');
                },
                error: function () {
                    $("#oHistoryButton").button('reset');
                    alert('Service is temporarily unavailable! Try again later.');
                }
            });
        }
    }
});
