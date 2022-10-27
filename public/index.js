
function select(){
    var select = document.getElementById('select').value;
    if(select == 'add'){
        window.location.href = 'promotionAddPage';
    }
    else {
        document.getElementById('addApper').innerHTML = '<a href="/apperAddPage/' + select + '">Add learner</a>';
        document.getElementById('managePromotion').innerHTML = '<a href="editPromotionPage/'+ select +'">Manage promotion</a>'
    }
}


