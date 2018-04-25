<form class="form-horizontal" method="post" action="{{route('citoyen.store')}}">
    {{ csrf_field() }}

    <div class="control-group">
        <label class="control-label">E-Mail</label>
        <div class="controls">
            <input type="email" name="mail" id="category_name">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Domicile</label>
        <div class="controls">
            <input type="text" name="domicile" id="category_name">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Telephone</label>
        <div class="controls">
            <input type="text" name="phone">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Personne à Contact</label>
        <div class="controls">
            <input type="text" name="num_person_contact" id="category_name">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Profession</label>
        <div class="controls">
            <input type="text" name="profession" id="category_name">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Nom</label>
        <div class="controls">
            <input type="text" name="nom" id="category_name">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Date naissance</label>
        <div class="controls">
            <input type="date" name="date_naissance" id="category_name">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label">Lieu de Naissance</label>
        <div class="controls">
            <input type="text" name="lieu_naissance" id="category_name">
        </div>
    </div>
    <div class="form-actions">
        <input type="submit" value="Ajouter" class="btn btn-success">
    </div>
</form>