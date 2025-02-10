<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <x-application-logo class="h-16 w-auto" />
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @include('layouts.navigation')

                <div class="text-gray-900 p-6">
                    <h1 class="text-2xl font-bold text-center mb-6"><span class="text-yellow-500">CITRONI</span> Rules</h1>

                    <section class="mb-6">
                        <h2 class="text-xl font-semibold text-green-600 mb-2">Deck and Number of Players</h2>
                        <p>Citroni is played with a standard 52-card deck, and the game can be played by <span class="font-bold">2 to 5 players.</span></p>
                    </section>

                    <section class="mb-6">
                        <h2 class="text-xl font-semibold text-green-600 mb-2">Game Setup</h2>
                        <p>The game begins with card distribution. Each player is dealt <span class="font-bold">three face-down cards</span>, which must remain hidden until the end of the game. After that, each player receives <span class="font-bold">six more cards</span>, from which they must select <span class="font-bold">three to reveal</span> and place face-up on the table.</p>
                    </section>

                    <section class="mb-6">
                        <h2 class="text-xl font-semibold text-green-600 mb-2">Gameplay</h2>
                        <p>The game begins, and each subsequent player must place a <span class="font-bold">higher-ranked card</span> than the previous one. For example, if the top card on the pile is <span class="font-bold">10</span>, the next card must be <span class="font-bold">J, Q, K, or A</span>. After each turn, the player must draw a new card from the deck to ensure they always have <span class="font-bold">at least 3 cards</span> in hand.</p>
                    </section>

                    <section class="mb-6">
                        <h2 class="text-xl font-semibold text-yellow-500 mb-2">Special Cards</h2>
                        <p><span class="font-bold text-red-500">2</span> - Neutralizes the last played card, allowing the next player to place any card.</p>
                        <p><span class="font-bold text-red-500">10</span> - "Kills" the pile, discarding all cards and starting fresh.</p>
                        <p>If a player has no valid card to play, they must take <span class="font-bold">the entire pile</span>.</p>
                        <p>If a player has <span class="font-bold">three identical cards</span>, they act like a <span class="font-bold">10</span> and discard the pile.</p>
                    </section>

                    <section class="mb-6">
                        <h2 class="text-xl font-semibold text-green-600 mb-2">End of the Game</h2>
                        <p>Players who have played all the cards in their hand must continue with their <span class="font-bold">three revealed table cards.</span></p>
                        <p>After that, they must start using their <span class="font-bold">three hidden cards</span>, drawing them randomly.</p>
                        <p>The winner is the player who <span class="font-bold">gets rid of all their cards first.</span></p>
                    </section>

                    <div class="text-center mt-6">
                        <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-yellow-500 text-white font-bold rounded-lg hover:bg-yellow-600 transition">
                            Back to Main Menu
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
