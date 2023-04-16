<section class="bg-white dark:bg-gray-900">
              <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                  <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
                  <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>


                  <form wire:submit.prevent="send" class="space-y-8" method="post">
                      <div>
                          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                          <input type="email" name="email" wire:model.debounce.500ms="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="example@gmail.com" required>
                          @error('email')
                          <div class="bg-red-200 text-red-600 p-2 mt-1">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div>
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Name</label>
                          <input type="text" id="name" name="name" wire:model.debounce.500ms="name" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know your name" required>
                          @error('name')
                          <div class="bg-red-200 text-red-600 p-2 mt-1">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div>
                          <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                          <input type="text" id="subject" name="subject" wire:model.debounce.500ms="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                          @error('subject')
                          <div class="bg-red-200 text-red-600 p-2 mt-1">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div class="sm:col-span-2">
                          <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                          <textarea id="message" name="message" wire:model.debounce.500ms="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                          @error('message')
                          <div class="bg-red-200 text-red-600 p-2 mt-1">
                              {{ $message }}
                          </div>
                          @enderror
                      </div>
                      <div wire:loading wire:target="send">
                          <img width="50" src="{{ asset('/img/loading.gif') }}" alt="">
                      </div>
                      <button wire:loading.attr="disabled" wire:loading.remove wire:target="send" type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg sm:w-fit hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 bg-indigo-800">Send message</button>

                      @if (session()->has('success'))
                          <div class="bg-green-200 text-green-600 p-2">
                              {{ session('success') }}
                          </div>
                      @endif
                  </form>


              </div>
            </section>