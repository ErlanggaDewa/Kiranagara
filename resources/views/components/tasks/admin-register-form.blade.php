<div>
  <form action="{{ route('register') }}" method="POST">
    @csrf

    <input type="hidden" name="role" value="admin" />

    <div class="grid-cols-2 gap-3 lg:grid">

      {{-- input full name --}}
      <div class="mb-4 lg:mb-0">
        <x-input-icon name="name" placeholder="Full Name" label="Full Name">
          @slot('path')
            <svg
              class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 fill-current text-gray-500 peer-placeholder-shown:text-gray-300 h-6 w-6"
              xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0" viewBox="0 0 48 48"
              style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
              <g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="m44.333 10.339h-19.343v4.266c0 .547-.443.99-.99.99s-.989-.443-.989-.99v-4.266h-19.344c-2.022 0-3.667 1.644-3.667 3.666v25.634c0 2.022 1.645 3.667 3.667 3.667h40.666c2.022 0 3.667-1.645 3.667-3.667v-25.634c0-2.022-1.645-3.666-3.667-3.666zm-30.182 5.77c2.345 0 4.253 1.909 4.253 4.255 0 2.344-1.908 4.25-4.253 4.25s-4.253-1.906-4.253-4.25c0-2.345 1.909-4.255 4.253-4.255zm9.602 21.266h-19.204c-.136 0-.247-.11-.247-.247 0-5.431 4.419-9.849 9.85-9.849s9.848 4.418 9.848 9.849c0 .137-.111.247-.247.247zm16.888-6.229h-12.469c-.547 0-.989-.443-.989-.99s.442-.989.989-.989h12.469c.547 0 .989.442.989.989s-.442.99-.989.99zm0-7.725h-12.469c-.547 0-.989-.442-.989-.99 0-.547.442-.989.989-.989h12.469c.547 0 .989.442.989.989 0 .548-.442.99-.989.99z">
                  </path>
                  <path d="m24.99 5.684c0-.547-.443-.989-.99-.989s-.989.442-.989.989v4.655h1.979z"></path>
                </g>
              </g>
            </svg>
          @endslot
        </x-input-icon>
      </div>

      {{-- input token register --}}
      <div class="mb-4 lg:mb-0">
        <x-input-icon name="token" placeholder="Token Register" label="Token Register" type="password">
          @slot('path')
            <svg
              class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 fill-current text-gray-500 peer-placeholder-shown:text-gray-300 h-6 w-6"
              xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
              style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
              <g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M42.667,0C19.136,0,0,19.136,0,42.667V64c0,23.531,19.136,42.667,42.667,42.667c23.531,0,42.667-19.136,42.667-42.667    V42.667C85.333,19.136,66.197,0,42.667,0z M64,64c0,11.765-9.568,21.333-21.333,21.333c-11.765,0-21.333-9.568-21.333-21.333    V42.667c0-11.765,9.568-21.333,21.333-21.333C54.432,21.333,64,30.901,64,42.667V64z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M256,0c-23.531,0-42.667,19.136-42.667,42.667V64c0,23.531,19.136,42.667,42.667,42.667S298.667,87.531,298.667,64V42.667    C298.667,19.136,279.531,0,256,0z M277.333,64c0,11.765-9.568,21.333-21.333,21.333S234.667,75.765,234.667,64V42.667    c0-11.765,9.568-21.333,21.333-21.333s21.333,9.568,21.333,21.333V64z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M256,149.333c-23.531,0-42.667,19.136-42.667,42.667v21.333C213.333,236.864,232.469,256,256,256    s42.667-19.136,42.667-42.667V192C298.667,168.469,279.531,149.333,256,149.333z M277.333,213.333    c0,11.765-9.568,21.333-21.333,21.333s-21.333-9.568-21.333-21.333V192c0-11.765,9.568-21.333,21.333-21.333    s21.333,9.568,21.333,21.333V213.333z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M458.667,149.333C435.136,149.333,416,168.469,416,192v21.333C416,236.864,435.136,256,458.667,256    s42.667-19.136,42.667-42.667V192C501.333,168.469,482.197,149.333,458.667,149.333z M480,213.333    c0,11.765-9.568,21.333-21.333,21.333s-21.333-9.568-21.333-21.333V192c0-11.765,9.568-21.333,21.333-21.333S480,180.235,480,192    V213.333z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M149.333,0H128c-5.888,0-10.667,4.768-10.667,10.667c0,5.899,4.779,10.667,10.667,10.667h10.667V96    c0,5.899,4.779,10.667,10.667,10.667S160,101.899,160,96V10.667C160,4.768,155.221,0,149.333,0z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M170.667,85.333H128c-5.888,0-10.667,4.768-10.667,10.667s4.779,10.667,10.667,10.667h42.667    c5.888,0,10.667-4.768,10.667-10.667S176.555,85.333,170.667,85.333z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M458.667,0h-21.333c-5.888,0-10.667,4.768-10.667,10.667c0,5.899,4.779,10.667,10.667,10.667H448V96    c0,5.899,4.779,10.667,10.667,10.667s10.667-4.768,10.667-10.667V10.667C469.333,4.768,464.555,0,458.667,0z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M480,85.333h-42.667c-5.888,0-10.667,4.768-10.667,10.667s4.779,10.667,10.667,10.667H480    c5.888,0,10.667-4.768,10.667-10.667S485.888,85.333,480,85.333z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M42.667,149.333H21.333c-5.888,0-10.667,4.768-10.667,10.667s4.779,10.667,10.667,10.667H32v74.667    C32,251.232,36.779,256,42.667,256s10.667-4.768,10.667-10.667V160C53.333,154.101,48.555,149.333,42.667,149.333z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M64,234.667H21.333c-5.888,0-10.667,4.768-10.667,10.667c0,5.899,4.779,10.667,10.667,10.667H64    c5.888,0,10.667-4.768,10.667-10.667C74.667,239.435,69.888,234.667,64,234.667z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M149.333,149.333H128c-5.888,0-10.667,4.768-10.667,10.667s4.779,10.667,10.667,10.667h10.667v74.667    c0,5.899,4.779,10.667,10.667,10.667S160,251.232,160,245.333V160C160,154.101,155.221,149.333,149.333,149.333z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M170.667,234.667H128c-5.888,0-10.667,4.768-10.667,10.667c0,5.899,4.779,10.667,10.667,10.667h42.667    c5.888,0,10.667-4.768,10.667-10.667C181.333,239.435,176.555,234.667,170.667,234.667z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M362.667,149.333h-21.333c-5.888,0-10.667,4.768-10.667,10.667s4.779,10.667,10.667,10.667H352v74.667    c0,5.899,4.779,10.667,10.667,10.667s10.667-4.768,10.667-10.667V160C373.333,154.101,368.555,149.333,362.667,149.333z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M384,234.667h-42.667c-5.888,0-10.667,4.768-10.667,10.667c0,5.899,4.779,10.667,10.667,10.667H384    c5.888,0,10.667-4.768,10.667-10.667C394.667,239.435,389.888,234.667,384,234.667z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M362.667,0h-21.333c-5.888,0-10.667,4.768-10.667,10.667c0,5.899,4.779,10.667,10.667,10.667H352V96    c0,5.899,4.779,10.667,10.667,10.667s10.667-4.768,10.667-10.667V10.667C373.333,4.768,368.555,0,362.667,0z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M384,85.333h-42.667c-5.888,0-10.667,4.768-10.667,10.667s4.779,10.667,10.667,10.667H384    c5.888,0,10.667-4.768,10.667-10.667S389.888,85.333,384,85.333z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M42.667,298.667C19.136,298.667,0,317.803,0,341.333v21.333c0,23.531,19.136,42.667,42.667,42.667    c23.531,0,42.667-19.136,42.667-42.667v-21.333C85.333,317.803,66.197,298.667,42.667,298.667z M64,362.667    C64,374.432,54.432,384,42.667,384c-11.765,0-21.333-9.568-21.333-21.333v-21.333c0-11.765,9.568-21.333,21.333-21.333    C54.432,320,64,329.568,64,341.333V362.667z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M256,298.667c-23.531,0-42.667,19.136-42.667,42.667v21.333c0,23.531,19.136,42.667,42.667,42.667    s42.667-19.136,42.667-42.667v-21.333C298.667,317.803,279.531,298.667,256,298.667z M277.333,362.667    c0,11.765-9.568,21.333-21.333,21.333s-21.333-9.568-21.333-21.333v-21.333c0-11.765,9.568-21.333,21.333-21.333    s21.333,9.568,21.333,21.333V362.667z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M149.333,298.667H128c-5.888,0-10.667,4.768-10.667,10.667c0,5.899,4.779,10.667,10.667,10.667h10.667v74.667    c0,5.899,4.779,10.667,10.667,10.667S160,400.565,160,394.667v-85.333C160,303.435,155.221,298.667,149.333,298.667z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M170.667,384H128c-5.888,0-10.667,4.768-10.667,10.667s4.779,10.667,10.667,10.667h42.667    c5.888,0,10.667-4.768,10.667-10.667S176.555,384,170.667,384z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M458.667,298.667h-21.333c-5.888,0-10.667,4.768-10.667,10.667c0,5.899,4.779,10.667,10.667,10.667H448v74.667    c0,5.899,4.779,10.667,10.667,10.667s10.667-4.768,10.667-10.667v-85.333C469.333,303.435,464.555,298.667,458.667,298.667z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M480,384h-42.667c-5.888,0-10.667,4.768-10.667,10.667s4.779,10.667,10.667,10.667H480    c5.888,0,10.667-4.768,10.667-10.667S485.888,384,480,384z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M362.667,298.667h-21.333c-5.888,0-10.667,4.768-10.667,10.667c0,5.899,4.779,10.667,10.667,10.667H352v74.667    c0,5.899,4.779,10.667,10.667,10.667s10.667-4.768,10.667-10.667v-85.333C373.333,303.435,368.555,298.667,362.667,298.667z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M384,384h-42.667c-5.888,0-10.667,4.768-10.667,10.667s4.779,10.667,10.667,10.667H384    c5.888,0,10.667-4.768,10.667-10.667S389.888,384,384,384z"
                      class=""></path>
                  </g>
                </g>
                <g xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <path
                      d="M490.667,448H53.333c-1.653,0-3.296,0.384-4.768,1.12L5.899,470.453C2.283,472.267,0,475.957,0,480    c0,4.043,2.283,7.733,5.899,9.547l42.667,21.333c1.472,0.736,3.115,1.12,4.768,1.12h437.333c11.765,0,21.333-9.568,21.333-21.333    v-21.333C512,457.568,502.432,448,490.667,448z M490.667,490.667H55.851L34.517,480l21.333-10.667h434.816V490.667z"
                      class=""></path>
                  </g>
                </g>
            </svg>
          @endslot
        </x-input-icon>
      </div>

      {{-- input email --}}
      <div class="col-span-2 mb-4 lg:mb-0">
        <x-input-icon name="email" placeholder="Email" label="Email">
          @slot('path')
            <svg
              class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 fill-current text-gray-500 peer-placeholder-shown:text-gray-300 h-6 w-6"
              xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512"
              style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
              <g>
                <path xmlns="http://www.w3.org/2000/svg"
                  d="m298.789 313.693c-12.738 8.492-27.534 12.981-42.789 12.981-15.254 0-30.05-4.489-42.788-12.981l-209.803-139.873c-1.164-.776-2.298-1.585-3.409-2.417v229.197c0 26.278 21.325 47.133 47.133 47.133h417.733c26.278 0 47.133-21.325 47.133-47.133v-229.198c-1.113.834-2.249 1.645-3.416 2.422z">
                </path>
                <path xmlns="http://www.w3.org/2000/svg"
                  d="m20.05 148.858 209.803 139.874c7.942 5.295 17.044 7.942 26.146 7.942 9.103 0 18.206-2.648 26.148-7.942l209.803-139.874c12.555-8.365 20.05-22.365 20.05-37.475 0-25.981-21.137-47.117-47.117-47.117h-417.766c-25.98.001-47.117 21.137-47.117 47.142 0 15.085 7.496 29.085 20.05 37.45z">
                </path>
              </g>
            </svg>
          @endslot
        </x-input-icon>
      </div>

      {{-- input password --}}
      <div class="mb-4 lg:mb-0">
        <x-input-icon name="password" placeholder="Password" label="Password" type="password"
          autocomplete="new-password">
          @slot('path')
            <svg
              class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 fill-current text-gray-500 peer-placeholder-shown:text-gray-300 h-6 w-6"
              xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 24 24"
              style="enable-background:new 0 0 512 512" xml:space="preserve">
              <g>
                <path xmlns="http://www.w3.org/2000/svg"
                  d="m18.75 9h-.75v-3c0-3.309-2.691-6-6-6s-6 2.691-6 6v3h-.75c-1.24 0-2.25 1.009-2.25 2.25v10.5c0 1.241 1.01 2.25 2.25 2.25h13.5c1.24 0 2.25-1.009 2.25-2.25v-10.5c0-1.241-1.01-2.25-2.25-2.25zm-10.75-3c0-2.206 1.794-4 4-4s4 1.794 4 4v3h-8zm5 10.722v2.278c0 .552-.447 1-1 1s-1-.448-1-1v-2.278c-.595-.347-1-.985-1-1.722 0-1.103.897-2 2-2s2 .897 2 2c0 .737-.405 1.375-1 1.722z">
                </path>
              </g>
            </svg>
          @endslot
        </x-input-icon>
      </div>

      {{-- confirm password --}}
      <div class="mb-4 lg:mb-0">
        <x-input-icon name="password_confirmation" placeholder="Confirm Password" label="Confirm Password"
          type="password">
          @slot('path')
            <svg
              class="absolute bottom-0 left-0 -mb-0.5 transform translate-x-1/2 -translate-y-1/2 fill-current text-gray-500 peer-placeholder-shown:text-gray-300 h-6 w-6"
              xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 24 24"
              style="enable-background:new 0 0 512 512" xml:space="preserve">
              <g>
                <path xmlns="http://www.w3.org/2000/svg"
                  d="m18.75 9h-.75v-3c0-3.309-2.691-6-6-6s-6 2.691-6 6v3h-.75c-1.24 0-2.25 1.009-2.25 2.25v10.5c0 1.241 1.01 2.25 2.25 2.25h13.5c1.24 0 2.25-1.009 2.25-2.25v-10.5c0-1.241-1.01-2.25-2.25-2.25zm-10.75-3c0-2.206 1.794-4 4-4s4 1.794 4 4v3h-8zm5 10.722v2.278c0 .552-.447 1-1 1s-1-.448-1-1v-2.278c-.595-.347-1-.985-1-1.722 0-1.103.897-2 2-2s2 .897 2 2c0 .737-.405 1.375-1 1.722z">
                </path>
              </g>
            </svg>
          @endslot
        </x-input-icon>
      </div>
    </div>
    <x-button type="submit" class="mt-8 bg-green-800 hover:bg-green-900 hover:border-green-900">
      REGISTER
    </x-button>

  </form>
</div>
