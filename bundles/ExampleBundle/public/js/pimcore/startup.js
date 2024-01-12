pimcore.registerNS("pimcore.plugin.ExampleBundle");

pimcore.plugin.ExampleBundle = Class.create({

    initialize: function () {
        document.addEventListener(pimcore.events.pimcoreReady, this.pimcoreReady.bind(this));
    },

    pimcoreReady: function (e) {
        // alert("ExampleBundle ready!");
    }
});

var ExampleBundlePlugin = new pimcore.plugin.ExampleBundle();
