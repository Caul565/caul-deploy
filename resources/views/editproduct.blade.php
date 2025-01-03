<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Edit Product</title>
		<link rel="stylesheet" href="{{asset('styles/output.css')}}" />
		<link
			href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
			rel="stylesheet"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body>
		<main class="flex">
			<aside class="py-6 w-[240px] bg-white h-screen fixed">
				<div class="flex h-full items-center justify-between flex-col w-full">
					<div class="w-full text-center">
						<p class="font-extrabold text-lg">
							<span class="text-primary">Meow</span>Cafe
						</p>
						<section class="mt-8 flex flex-col">
							<div class="relative px-6">
								<a
									href="./dashboard.html"
									class="p-3 group data-active:bg-primary items-center flex w-full rounded-md data-active:text-white"
								>
									<div
										class="bg-primary absolute rounded-e-lg top-0 left-0 h-full w-1 hidden group-data-active:block"
									></div>
									<i class="ri-dashboard-line mr-4 text-lg"></i>
									<span class="font-semibold">Dashboard</span>
								</a>
							</div>
							<div class="relative px-6">
								<a
									href="./products.html"
									class="p-3 group data-active:bg-primary items-center flex w-full rounded-md data-active:text-white"
									data-page="active"
								>
									<div
										class="bg-primary absolute rounded-e-lg top-0 left-0 h-full w-1 hidden group-data-active:block"
									></div>
									<i class="ri-microsoft-line mr-4 text-lg"></i>
									<span class="font-semibold">Products</span>
								</a>
							</div>
						</section>
						<div class="h-[1px] bg-[#E0E0E0] w-full my-4"></div>
						<section>
							<div class="w-full px-4">
								<span
									class="px-4 uppercase text-[#202224] font-bold text-sm w-full flex"
									>Pages</span
								>
							</div>
							<div class="relative px-6">
								<a
									href="./orders.html"
									class="p-3 group data-active:bg-primary items-center flex w-full rounded-md data-active:text-white"
								>
									<div
										class="bg-primary absolute rounded-e-lg top-0 left-0 h-full w-1 hidden group-data-active:block"
									></div>
									<i class="ri-clipboard-line mr-4 text-lg"></i>
									<span class="font-semibold">Orders</span>
								</a>
							</div>
						</section>
					</div>
					<div class="w-full px-6">
						<button class="p-3 flex w-full items-center rounded-md">
							<i class="ri-logout-circle-line mr-4 text-lg"></i>
							<span class="font-semibold">Logout</span>
						</button>
					</div>
				</div>
			</aside>
			<div class="ml-[240px] flex w-full relative">
				<nav
					class="h-[70px] flex py-4 px-7 justify-between items-center flex-grow fixed bg-white left-[240px] right-0"
				>
					<input
						type="text"
						name=""
						id=""
						placeholder="Search"
						class="px-4 w-96 h-full py-2 bg-backgroundPrimary rounded-3xl border border-borderPrimary"
					/>
					<div class="flex gap-5 items-center h-full">
						<div
							class="overflow-hidden h-full aspect-square rounded-full object-center"
						>
							<img
								src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc-FErDnFfCZknlWHh1bsg7hcuuAkmi_vmptg9wrrZoA&s"
								alt=""
								class="w-full"
							/>
						</div>
						<div>
							<p class="font-bold text-[#404040]">Imank</p>
							<p class="text-sm font-semibold text-[#565656]">Admin</p>
						</div>
					</div>
				</nav>
				<main class="p-7 bg-backgroundPrimary h-content mt-[70px] w-full">
					<div class="flex justify-between items-center">
						<p class="text-3xl font-bold">Edit Products</p>
						<div class="flex gap-2">
							<button
								type="submit"
								form="form"
								class="bg-primary text-white font-bold h-full text-base w-36 inline-flex py-3 rounded-md justify-center"
							>
								<p class="-mb-[2px]">Add</p>
							</button>
							<a
								href=""
								class="bg-red-500 text-white font-bold h-full text-base w-36 inline-flex py-3 rounded-md justify-center"
							>
								<p class="-mb-[2px]">Delete</p>
							</a>
						</div>
					</div>

					<form
						id="form"
						method="post"
						action="{{ '/products/' .$product->id}}"
						class="grid grid-cols-5 font-semibold mt-7
                        gap-x-8 text-md"
					>
                    @csrf
                    @method('PUT')
						<div
							class="col-span-3 bg-white px-8 py-6 flex flex-col gap-6 rounded-lg border border-borderPrimary"
						>
							<div class="flex flex-col gap-3">
								<label for="product_name">Product Name</label>
								<input
									type="text"
									id="name"
									name="name"
                                    value="{{$product->name}}"
									placeholder="Input product name"
									class="px-5 py-2 border-borderPrimary border bg-backgroundPrimary rounded-md"
								/>
							</div>
							<div>
								<fieldset class="flex flex-col gap-3">
									<p>Category</p>
									<div class="flex gap-1">
                                    @foreach ($categories as $category)
                                <div>
                                    <input type="radio" name="category_id" id="{{ $category->name }}" class="hidden peer"
                                        value="{{ $category->id }}" @if ($product->category_id === $category->id) checked @endif />
                                    <label role="button" for="{{ $category->name }}" tabindex="0"
                                        class="peer-checked:text-white bg-[#D9D9D9] peer-checked:bg-primary px-6 py-2 text-base rounded-md">
                                        {{ Str::ucfirst($category->name) }}
                                    </label>
                                </div>
                            @endforeach
									</div>
								</fieldset>
							</div>
							<div class="flex flex-col gap-3">
								<label for="price">Price</label>
								<input
                                value="{{$product->price}}"
									type="text"
									id="price"
									name="price"
									placeholder="Input price"
									class="px-5 py-2 border-borderPrimary border bg-backgroundPrimary rounded-md"
								/>
							</div>
							<div class="flex flex-col gap-3">
								<label for="stock">Stock</label>
								<input
                                value="{{$product->stock}}"
									type="text"
									id="stock"
									name="stock"
									placeholder="Input stock"
									class="px-5 py-2 border-borderPrimary border bg-backgroundPrimary rounded-md"
								/>
							</div>
						</div>
						<section
							class="col-span-2 bg-white py-6 h-fit rounded-lg border border-borderPrimary"
						>
							<p class="font-bold text-lg px-8">Product Image</p>
							<div
								class="h-[1px] border-b border-b-borderPrimary w-full my-4"
							></div>
							<div class="px-4">
							<label for="image-upload" id="drag-area"
                        class="w-full h-[280px] bg-backgroundPrimary border-2 border-[#D9D9D9] border-dashed rounded-lg overflow-hidden cursor-pointer flex justify-center items-center">
                        <input id="image-upload" name="image" value="{{ $product->image }}" type="file" hidden
                            accept="image/*" />
                        <div id="image-viewer"
                            class="flex flex-col items-center justify-center w-full h-full bg-center bg-no-repeat bg-cover">
                            <img src="{{ asset('storage/images/products/' . $product->image) }}" alt="" />
                            <p class="text-[18px]">
                                Tarik dan lepas atau
                                <span class="text-primary">pilih gambar</span>
                            </p>
                            <p class="text-base text-black/25">
                                Mendukung JPG, JPEG, dan PNG
                            </p>
                        </div>
                    </label>
							</div>
						</section>
					</form>
				</main>
			</div>
		</main>
		<script>
			const form = document.getElementById("form");

			form.addEventListener("submit", (event) => {
				event.preventDefault(); // Prevent the form from submitting

				const formData = new FormData(form);
				console.log(formData);
				// Log form values using console.log()
				for (const [key, value] of formData.entries()) {
					if (value instanceof File) {
						console.log(
							`${key}: File { name: ${value.name}, size: ${value.size} bytes }`
						);
					} else if (value instanceof FileList) {
						console.log(`${key}:`);
						for (const file of value) {
							console.log(
								`  File { name: ${file.name}, size: ${file.size} bytes }`
							);
						}
					} else {
						console.log(`${key}: ${value}`);
					}
				}
			});
	</body>
</html>