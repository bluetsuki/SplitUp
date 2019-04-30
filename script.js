function hideShow() {
    if (document.getElementById('options').checked) {
        document.getElementById('advanceDisplay').style.display = 'block';
        document.getElementById('advanceDisplay').innerHTML = "<label>Nombre de groupe</label><input oninput='addGroupe()' type='text' name='nbGroup' id='nbGroup'></input>";
    } else {
        document.getElementById('advanceDisplay').style.display = 'none';
    }
}

function addGroupe() {
    var nb = document.getElementById('nbGroup').value;
    document.getElementById('advanceDisplay').innerHTML = "<label>Nombre de groupe</label><input oninput='addGroupe()' type='text' name='nbGroup' value='" + nb + "' id='nbGroup'></input>";
    for(var i = 1; i <= nb; i++){
        var div = document.createElement("div");
        var label = document.createElement("label");
        var input = document.createElement("input");
        div.appendChild(label);
        div.appendChild(input);
        div.class = 'row';
        label.innerHTML = 'Groupe ' + i;
        input.type = 'text';
        document.getElementById('advanceDisplay').appendChild(div);
    }
}