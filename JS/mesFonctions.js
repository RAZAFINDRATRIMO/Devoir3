function AfficherLesVilles(idRegion)
{
    alert("Hello");
    $.ajax
    (
        {
            type:"get",
            url:"index.php/ControleurAccueil/AfficherVille", 
            data:"idRegion="+id,
            success:function(data)
            {
                    $('#divVilles').empty();
                    $('#divVilles').append(data);
            },
            error: function()
            {
                alert("Impossible de voir les villes");
            }
        }
    );
}




function Connexion()
{
    alert("Slt");
    unUser = $_GET['txtNom'];
    $.ajax(
        {
            type:"get",
            url:"index.php/ControleurAccueil/Connexion",
            data:"unUser"+unUser,
            success:function(data)
            {
                $('#divRegions').empty();
                $('#divRegions').append(data);
            },
            error:function()
            {
                alert('Pas compris');
            }
        }
        );
}

function AjouterPoints()
{

}