<!--script to the text-->
<SCRIPT LANGUAGE=JavaScript>

    var chaine = "";
    var nb_car = chaine.length;
    var tableau = chaine.split("");
    texte = new Array;
    var txt = '';
    var nb_msg = nb_car - 1;
    for (i=0; i<nb_car; i++) {
        texte[i] = txt+tableau[i];
        var txt = texte[i];
    }

    actual_texte = 0;
    function changeMessage()
    {
        document.getElementById("bloc").innerHTML = texte[actual_texte];
        actual_texte++;
        if(actual_texte >= texte.length)
            actual_texte = nb_msg;
    }
    if(document.getElementById)

        setInterval("changeMessage()",25) /* la vitesse de defilement (plus on a une valeur faible plus
texte s'affiche rapidement) */
</SCRIPT>