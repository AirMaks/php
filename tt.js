document.querySelector('input[type=range]').addEventListener('input', function rangeChange() {
    this.setAttribute('value', this.value);
});