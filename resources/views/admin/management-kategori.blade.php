<!-- Konten kategori -->
@if ($dataKategori->count())

  <div>
    <h1 class="mt-10 text-xl font-bold">Konten Kategori</h1>
    <hr class="mt-2 mb-4 border-2 shadow-sm border-tertiary bg-tertiary">
    <div class="flex justify-end ">
      <div
        class="flex gap-2 px-4 py-2 mb-3 text-white duration-200 border rounded-md shadow-sm cursor-pointer group hover:border-sky-800 hover:bg-white w-max bg-sky-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 group-hover:stroke-sky-800" fill="none"
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <a href="{{ route('budaya-admin') }}">
          <h1 class="group-hover:text-sky-800">Tambah Data</h1>
        </a>
      </div>
    </div>
    <div class="flex flex-col ">
      <div class="overflow-x-auto ">
        <div class="inline-block min-w-full py-2 align-middle shadow-md ">
          <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col"
                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                    No.
                  </th>
                  <th scope="col"
                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                    Judul Kategori
                  </th>
                  <th scope="col"
                    class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                @php
                  $no = $dataKategori->firstItem();
                @endphp
                @foreach ($dataKategori as $culturalCategory)
                  <tr>
                    <td class="px-6 py-4 whitespace-wrap">
                      <div class="flex items-center justify-center">
                        <div class="text-sm font-medium text-center text-gray-900">
                          {{ $no++ }}
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-wrap">
                      <div class="flex items-center">
                        <div class="text-sm font-medium text-gray-900">
                          {{ $culturalCategory->name }}
                        </div>
                      </div>
                    </td>


                    {{-- action --}}
                    <td class="flex justify-center gap-2 px-6 py-4 whitespace-nowrap">
                      <form id="form-delete-budaya-{{ $culturalCategory->id }}" class="inline-block"
                        action="{{ route('kategori-budaya.destroy', $culturalCategory) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $culturalCategory->id }}">
                        <div class="cursor-pointer" onclick="confirmDeleteCulture({{ $culturalCategory->id }})">
                          <span
                            class="inline-flex p-2 px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                          </span>
                        </div>

                      </form>
                      <form class="inline-block" action="{{ route('kategori-budaya.edit', $culturalCategory->id) }}"
                        method="GET">
                        <input type="hidden" name="id" value="{{ $culturalCategory->id }}">
                        <button type="submit">
                          <span
                            class="inline-flex p-2 px-2 text-xs font-semibold leading-5 text-blue-800 bg-blue-100 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                          </span>
                        </button>
                      </form>

                      <form class="inline-block" action="{{ route('kategori-budaya.show', $culturalCategory->id) }}"
                        method="GET">
                        <input type="hidden" name="id" value="{{ $culturalCategory->id }}">
                        <button type="submit">
                          <span
                            class="inline-flex p-2 px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                          </span>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-5">
    {!! $dataKategori->onEachSide(0)->links() !!}
  </div>
@else
  <h1 class="mt-10 text-xl font-bold">Konten Budaya</h1>
  <hr class="mt-2 mb-4 border-2 shadow-sm border-tertiary bg-tertiary">

  <div class="alert alert-error">
    <div class="flex-1">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 mx-2 stroke-current">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
      </svg>
      <label>Data kategori Budaya Kosong!</label>
    </div>
  </div>
@endif
<script>
  function confirmDeleteCulture(id) {
    const data = document.getElementById(`form-delete-budaya-${id}`);
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: "btn btn-success",
        cancelButton: "btn btn-danger",
      },
      buttonsStyling: true,
    });

    swalWithBootstrapButtons
      .fire({
        title: "Apa kamu yakin?",
        text: `Kamu tidak dapat mengembalikan data!`,
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true,
      })
      .then((result) => {
        if (result.isConfirmed) {
          swalWithBootstrapButtons
            .fire("Deleted!", `Menghapus Data`, "success")
            .then(() => {
              data.submit();
            });
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            "Cancelled",
            `Gagal menghapus data`,
            "error"
          );
        }
      });
  };
</script>
