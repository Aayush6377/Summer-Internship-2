
function submitVote(pollId) {
    const form = document.createElement('form');
    form.method = 'post';
    form.action = 'community/submit_vote.php';

    const pollInput = document.createElement('input');
    pollInput.type = 'hidden';
    pollInput.name = 'poll_id';
    pollInput.value = pollId;
    form.appendChild(pollInput);

    const selectedOption = document.querySelector(`input[name='poll_${pollId}']:checked`);
    if (selectedOption) {
        const optionInput = document.createElement('input');
        optionInput.type = 'hidden';
        optionInput.name = 'option_index';
        optionInput.value = selectedOption.value;
        form.appendChild(optionInput);

        document.body.appendChild(form);
        form.submit();
    } else {
        alert('Please select an option before voting.');
    }
}
