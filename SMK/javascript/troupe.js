let plusOuMoins = document.getElementsByClassName("plus-ou-moins")

for (let elt of plusOuMoins){
		elt.addEventListener('click', function() {
			if (elt.parentElement.nextElementSibling.classList.contains("histoire-ban-cache")){
				elt.parentElement.nextElementSibling.classList.remove("histoire-ban-cache");
				elt.parentElement.nextElementSibling.classList.add("histoire-ban-montre");
				elt.innerText = "-"
				elt.title = "Voire moins"
			}
			else{
				elt.parentElement.nextElementSibling.classList.remove("histoire-ban-montre");
				elt.parentElement.nextElementSibling.classList.add("histoire-ban-cache");
				elt.innerText = "+"
				elt.title = "Voire plus"
			}
})}