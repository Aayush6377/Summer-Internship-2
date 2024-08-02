function fetchHealthTips() {
    const ageGroup = document.getElementById('age-group').value;
    const tipsContainer = document.getElementById('tips-container');

    if (ageGroup) {
        fetch(`responses.php?ageGroup=${ageGroup}`)
            .then(response => response.json())
            .then(data => {
                tipsContainer.innerHTML = data.tips;
            })
            .catch(error => {
                tipsContainer.innerHTML = 'Error fetching tips. Please try again later.';
            });
    } else {
        tipsContainer.innerHTML = 'Please select an age group.';
    }
}
