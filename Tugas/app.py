import streamlit as st

# Konfigurasi halaman
st.set_page_config(
    page_title="Aplikasi Simple Streamlit",
    page_icon="🚀",
    layout="centered"
)

# Judul
st.title("🚀 Aplikasi Simple Streamlit")
st.write("Selamat datang di aplikasi Streamlit sederhana.")

# Input nama
nama = st.text_input("Masukkan nama Anda")

if nama:
    st.success(f"Halo, {nama}! 👋")

st.divider()

# Kalkulator sederhana
st.subheader("Kalkulator Penjumlahan")

angka1 = st.number_input("Angka Pertama", value=0.0)
angka2 = st.number_input("Angka Kedua", value=0.0)

if st.button("Hitung"):
    hasil = angka1 + angka2
    st.metric("Hasil", hasil)

st.divider()

# Sidebar
st.sidebar.title("Menu")
menu = st.sidebar.selectbox(
    "Pilih Menu",
    ["Home", "Tentang"]
)

if menu == "Tentang":
    st.info(
        """
        Aplikasi ini dibuat menggunakan Streamlit.
        
        Fitur:
        - Input nama
        - Kalkulator sederhana
        - Sidebar
        """
    )