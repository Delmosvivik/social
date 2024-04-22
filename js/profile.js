document.addEventListener("DOMContentLoaded", async function () {
    const accauntCreationDate = document.getElementById("accaunt-create-date");
    const userEmail = document.getElementById("user-document");
    const userInfo = document.getElementById("user-info");

    async function loadProfileInfo() {
        try {
            const response = await fetch('getprofileinfo.php', {
                method: 'POST',
            });
            const data = await response.text();
            const [email, created, info] = data.split('|');
            userEmail.nodeValue = email;
            userInfo.value = info
            userEmail.innerText = email;
            accauntCreationDate.innerText = created;
            userInfo.innerText = info;
        } catch (error) {
            console.error(error.message);
        }
    }
    loadProfileInfo();
});