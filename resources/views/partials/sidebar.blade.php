		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					
					<ul class="nav nav-primary">
						<li class="nav-item {{ ($title === "dashboard") ? 'active' : '' }}">
							<a href="/dashboard" >
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item my-3 {{ ($title === "daftar buku") ? 'active' : '' }}">
							<a href="/daftarBuku" >
								<i class="fa-solid fa-book"></i>
								<p>Daftar Buku</p>
							</a>
						</li>
						<li class="nav-item my-3 {{ ($title === "daftar anggota") ? 'active' : '' }}">
							<a href="/daftarAnggota" >
								<i class="fa-solid fa-user-group"></i>

								<p>Daftar Anggota</p>
							</a>
						</li>
						<li class="nav-item my-3 {{ ($title === "daftar Peminjaman buku") ? 'active' : '' }}">
							<a href="/daftarPeminjamanBuku" >
								<i class="fa-solid fa-book"></i>
								<p>Daftar Peminjaman Buku</p>
							</a>
						</li>
					
						
						
						
						
						
					
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->