
define([], function () {

    var mageJsComponent = function(config, node)
    {
        console.log(config)
        console.log(node);
        console.log('HEY HEY HEY ');

        console.log(new Date());
    };

    var displayText = function(node)
    {
        document.getElementById('batman').innerHTML = "NA NA NA NA BATMAN!";
        console.log(node);
    };


    return mageJsComponent;
    return displayText;
});