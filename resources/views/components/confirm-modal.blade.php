<div name="modal" role="dialog" x-show="isModalOpen" x-on:click.away="isModalOpen = false" x-cloak x-transition
    class="flex item-center justify-center fixed z-20 w-full h-full invisibility">
    <div x-on:click.away="isModalOpen = false" x-cloak
        class="bg-white dark:bg-gray-800 rounded-lg max-w-xl p-10 m-auto overflow-hidden shadow-xl transform transition-all ease-in-out duration-300">
        <div class="flex items-center justify-between border-b-2 border-black">
            <h3>Hello World</h3>
        </div>
        <p class="text-white">
            Natus earum velit ab nobis eos. Sed et exercitationem voluptatum omnis
            dolor voluptates. Velit ut ipsam sunt ipsam nostrum. Maiores officia
            accusamus qui sapiente. Dolor qui vel placeat dolor nesciunt quo dolor
            dolores. Quo accusamus hic atque nisi minima.
        </p>
        <div class="flex justify-between">
            <div class="mt-6 flex justify-between w-full">
                <x-secondary-button aria-label="Close" x-on:click="isModalOpen=false"
                    class="flex justify-center w-[45%]">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="flex justify-center w-[45%]">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </div>
    </div>
</div>
{{-- Overlay --}}
<div class="w-full h-full fixed top-0 left-0 bottom-0 right-0 bg-gray-500/75 dark:bg-gray-900/75 backdrop-blur-[2px] z-10"
    x-show="isModalOpen" x-cloak>
</div>
