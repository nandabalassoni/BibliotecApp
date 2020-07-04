cordova.define('cordova/plugin_list', function(require, exports, module) {
  module.exports = [
    {
      "id": "com.telerik.plugins.nativepagetransitions.NativePageTransitions",
      "file": "plugins/com.telerik.plugins.nativepagetransitions/www/NativePageTransitions.js",
      "pluginId": "com.telerik.plugins.nativepagetransitions",
      "clobbers": [
        "window.plugins.nativepagetransitions"
      ]
    }
  ];
  module.exports.metadata = {
    "cordova-plugin-whitelist": "1.3.4",
    "com.telerik.plugins.nativepagetransitions": "0.7.0"
  };
});