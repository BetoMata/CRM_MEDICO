# Generated by Django 3.1.7 on 2021-05-04 04:32

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Sucursal',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nombre', models.CharField(max_length=80)),
                ('direccion', models.CharField(max_length=120)),
                ('telefono', models.CharField(max_length=20)),
            ],
        ),
    ]
