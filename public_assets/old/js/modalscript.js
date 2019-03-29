
OnLoad(function()
{
    // Find all elements that have a href of #topmenu
    var menuExpanders = document.getElementById("exit-button");

    // var t = document.getElementsByClassName("navMenuContent");

    // t.style.display = 'none';

    // Loop each menu expander
    ForEach(menuExpanders, function(item)
    {
        // Listen on the click event
        item.addEventListener("click", function(e)
        {
            // Cancel navigation
            e.preventDefault();

            // Add the desired class to all top menus
            var topMenus = document.querySelectorAll("[data-modal-class]");
            
            // For each menu...
            ForEach(topMenus, function(menu)
            {
                // Get the value of the data-topmenu-class attribute
                var modalClass = menu.getAttribute("data-modal-class");

                // Add/remove class
                menu.classList.add(modalClass);
            });
        });
    });
    
});