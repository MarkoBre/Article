export default () => ({
    tag: '',
    tagsList: '',

    addTag() {
        this.tagsList += `
                <span
                    class="flex flex-wrap pl-4 pr-2 py-2 m-1 justify-between items-center text-sm font-medium rounded-lg bg-purple-500 text-gray-200 hover:bg-purple-600 hover:text-gray-100 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                    ${this.tag}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 cursor-pointer" viewBox="0 0 20 20"
                        fill="currentColor" x-on:click="removeTag">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            `;

        this.tag = '';
    },
    removeTag(event) {
        event.target.closest('span').remove();
    }
});
