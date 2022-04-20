function redirect(){
    window.location.href="/annonces/new";
}

function next() {
    document.getElementById('profile-part').className = 'active-part';
    document.getElementById('account-part').className = 'inactive-part';

    document.getElementById('compte-text').className = 'inactive-text';
    document.getElementById('profile-text').className = 'active-text';

    var topBar = document.getElementById('compte-sidebar');
    topBar.classList.add('empty-bar');
    var bottomBar = document.getElementById('profile-sidebar');
    bottomBar.classList.add('current-bar');

    document.getElementById('next-button').className = 'next-button-inactive';
    document.getElementById('form-inscription').className = 'Bouton-inscription';

    document.getElementById('cgu').className = 'cgu-container';
};

function profileDropdown(){
    if(document.getElementById('profile-content').className == 'profile-content-hidden'){
        document.getElementById('profile-content').className = 'profile-content';
    } else {
        document.getElementById('profile-content').className = 'profile-content-hidden';
    }
}