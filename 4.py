from textwrap import wrap

def text_cleaner(teks):
    teks_mentah = teks
    
    hasil_pembersihan = ''.join(i for i in teks_mentah if i.isalnum())
    
    hasil_akhir = '-'.join(wrap(hasil_pembersihan,3))
    
    print(hasil_pembersihan)
    print(hasil_akhir)


text_cleaner("12r324324lksdjfijfksdf7%^^&*%$$#%^&")

