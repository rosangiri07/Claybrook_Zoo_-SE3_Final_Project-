function showAnimalCategory(category){
  if (category.value=='1') {
    document.getElementById('animal-mammal').style.display='block';
    document.getElementById('animal-bird').style.display='none';
    document.getElementById('animal-fish').style.display='none';
    document.getElementById('animal-repamp').style.display='none';
  } else if (category.value=='2') {
    document.getElementById('animal-mammal').style.display='none';
    document.getElementById('animal-bird').style.display='block';
    document.getElementById('animal-fish').style.display='none';
    document.getElementById('animal-repamp').style.display='none';
  } else if (category.value=='3') {
  	document.getElementById('animal-mammal').style.display='none';
    document.getElementById('animal-bird').style.display='none';
    document.getElementById('animal-fish').style.display='block';
    document.getElementById('animal-repamp').style.display='none';
   } else if (category.value=='4') {
  	document.getElementById('animal-mammal').style.display='none';
    document.getElementById('animal-bird').style.display='none';
    document.getElementById('animal-fish').style.display='none';
    document.getElementById('animal-repamp').style.display='block';
   }
}



function showSponserDetails(sponsor){
  if (sponsor.value=='none') {
    document.getElementById('sponsor-details').style.display='none';
   } else {
    document.getElementById('sponsor-details').style.display='block';    
   }
}
