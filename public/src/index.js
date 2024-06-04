const slideToFooter = () => {
    try {
        const aboutButton = document.getElementById('about-button');
    
        aboutButton.addEventListener('click', () =>{
            const footer = document.getElementById('footer');
    
            footer.scrollIntoView({behavior: "smooth"});
        });
    } catch (error) {
        console.log(error);
    }
}

const dropdownBookCategory = () => {
    try {
        const dropdownButton = document.getElementById('dropdownDefaultButton');
    
        dropdownButton.addEventListener('click', () => {
            const dropdown = document.getElementById('dropdown');
            dropdown.classList.contains('hidden') ? dropdown.classList.remove('hidden') : dropdown.classList.add('hidden');
        });
        
        window.addEventListener("click", (event)  => {
            const dropdown = document.getElementById('dropdown');
            if (!event.target.matches('#dropdownDefaultButton')) {
                if (!dropdown.classList.contains('hidden')) {
                    dropdown.classList.add('hidden');
                }
            }
        });
    } catch (error) {
        console.log(error);
    }
}

const openModalAddBook = () => {
    try {
        const modalButton = document.getElementById('modal-button');
        const closeModal = document.getElementById('close-modal');
        const modal = document.getElementById('crud-modal');
        modalButton.addEventListener('click',() => {
            modal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        })
        
    } catch (error) {
        console.log(error);
    }
}
const openModalEditBook = (id) => {
    try {
        const modalButton = document.getElementById(`edit-button-${id}`);
        const closeModal = document.getElementById(`close-modal-edit-${id}`);
        const modal = document.getElementById(`crud-modal-edit-${id}`);
        modalButton.addEventListener('click',() => {
            modal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        })


        
    } catch (error) {
        console.log(error);
    }
}
const openModalBuyBook = (id) => {
    try {
        const modalButton = document.getElementById(`buy-${id}`);
        const closeModal = document.getElementById(`close-modal-buy-${id}`);
        const modal = document.getElementById(`crud-modal-buy-${id}`);
        modalButton.addEventListener('click',() => {
            modal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', () => {
            modal.classList.add('hidden');
        })


        
    } catch (error) {
        console.log(error);
    }
}

const buy = (judul,penulis,kategori,user,email) =>{
    console.log("haloo");
    const text = `Haloo+admin.%0ASaya%0ANama+Lengkap+:+${user}%0AEmail+:+${email}.%0Aingin+membeli+buku.%0AJudul+:+${judul}%0APenulis+:+${penulis}%0AKategori+:+${kategori}`;
    // event.preventDefault();
    const url = `https://web.whatsapp.com/send?phone=6281360258927&text=${text}`;

    window.open(url, "_blank");
}




slideToFooter();
dropdownBookCategory();
openModalAddBook();
// submitIklan();