$(document).ready(function(){

    $("button#get_data").click(function() {
        var items = [];
        var i = 0;
        var airtable_read_endpoint = "https://api.airtable.com/v0/app65vUW7fVUSBqwi/Imported%20table?api_key=keytIXhS7YQcZwe4a";
        var dataSet = [];
        $.getJSON(airtable_read_endpoint, function(result) {
               $.each(result.records, function(key,value) {
                   items = [];
                       items.push(value.fields.title);
                       items.push(value.fields.url);
                       items.push(value.fields.categories);
                       items.push(value.fields.post_date);
                       items.push(value.fields.pics);
                       dataSet.push(items);
                }); // end .each

             $('#example').DataTable( {
                 data: dataSet,
                 retrieve: true,
                 columns: [
                     { title: "Title",
                       defaultContent:""},
                     { title: "URL",
                       defaultContent:"" },
                     { title: "Categories",
                       defaultContent:""},
                     { title: "Post Date",
                       defaultContent:""},
                     { title: "Pictures",
                       defaultContent:""},
                 ]
             } );
        }); // end .getJSON
     }); // end button
}); // document ready
