<?php
# @Author: JokenLiu <Jason>
# @Date:   2017-05-22 10:40:40
# @Email:  190646521@qq.com
# @Project: Demon
# @Filename: config.php
# @Last modified by:   Jason
# @Last modified time: 2018-02-04 17:08:49
# @License: 北京乐维世纪网络科技有限公司开发者协议
# @Copyright: DemonLive



$config = array (
		//应用ID,您的APPID。
		'app_id' => "2018092561520289",

		//商户私钥
		/*
		'merchant_private_key' => "-----BEGIN PRIVATE KEY-----MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDfASpjCfFg7He4kTVZ43hdyjMLHRwdlgTq4pV3PVpMxh6N5+x+JaODc/OewC0BhjNhxUAJPv81YL5vafqEit4lAdArOwnWOlwWptttyfKwYBRkaGBSTQyVEg1y5EakGY937YJ1AkLquIyabS5fYS9u/R5RRmPAbwy2lhnmJhffynMZkPc6n/cW9JUbKA3sbTbNDq2YQKShtrDtz06KuIqalAjM2XLXL8im1gqM9QE+c85LoCkZkevJtFgCgYRDmNwUctfYr+1TPfyow0QpXRQEzpT7RrdpJA1nMSmrRXYSVwSCLbfZtZ0xrWtGKCT++r2fyBlVHvzll8jj5Z0aU6tdAgMBAAECggEAFjWoggqYdp22YrRbiuNDtpuPr9irVyr8vGPqnOCIYMMOgfWKMRoQieP/bF0ZXmB+N4uMkB8tDaTf8nqsj4zBCRCAKf4MQcC4MS1XBz0opXY8Ma/PgALacPJGUp33hxpgloIaDws1nOjaX/rltmwYbEZbQZ7wCldE/d4/IBPFJu10IXRRG8BryppRx7DpVLlF2rbbTUshNxuo/R3mfA2qUEJDxKltP6Sw8cqLeQuT32UU71lyVND/DTaGst3kuUPof7sesPZ73Log2Oyiu2S5C+9k3P0bKuOJKma56p5IR78mJyHTl75VzkmecG7pmP6e/CcSGIL3DEXMA3IYdPgyBQKBgQD2hR6D5jpyb6RIYh0vu046i6XXqUP5Sn6ElmPAMDKKEoGnB+C0Sn6QNklLsTXsb6LMT2og2buHBeX2jBEul2Zkr5QFxVkCntbAFSGhqrrAAJaOYkwZk8hgW9KdX8oYe0JIicpWe3gtEzE2ZwEXrOiQSiiwFhEcvmHO7GWJhye58wKBgQDnlIwUVQDaoGgDiOPrgJmHzopenYGweCuoXoYL3WZ+H1PDby+ogRXDB7rwNyGH7LSFFh8jp68FLGNFDPzXw8inzsiu2el+wiGYeJa0kyETUGjJR3AycdM4tyAYOW6fXSI6/5ELkWNN+MbHFo8bIVldgfDncFp+KwV8uO/60s2JbwKBgQCl4zx+m7225iORxdxIE233/aMS9cdVCOkMRbtIR+aqfPucL7Po/rweRTmbYtubiB/wBnyvMHV9zd1KxESHqr/vfytHmt5j4gk25sFj7eSPcZXeqIz3JThQh1m6Jwxy3vbioz5yZdGf22thZX0ZtnQlLJImtCK9yes9eFx3aGi2OwKBgElubACid5Pbmz/Lr2HktEpA7tVTomT/pfBMkLrAaJiDfH8TCYyn6euezuMOyD4ei5tLyXH34OKGEbA6jw4n0b+MLUxsYsLD8f0z962onatPKvrwAR6twylPwAiOZYp48Lq+gRKm9lMqGHXWrGgQ6hJheq8YjElHgQTsa4QgRfZXAoGBAIv57Blxm7K3h8B03p1YsbsO66V8F08LKa5dHrnwqtiYe2uOPns9uOPzABjgr+1FmcICKmC3bQIIa/EsA+MU7AZ7YEJlJfwDkXtCiKW9SGn3NMK73/zgf0OuLGVI8YsACrDVLSMttOtsfIbuHUS6L9s/unecQxtd8z0EkXS8MU7z-----END PRIVATE KEY-----",
		*/
		'merchant_private_key' => "MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC5I3ZU64UBL7djsG7AaqxkDWCydJ7YR7OREIIB2PPyGc4EX+QboZQrf1yn7fBoVM3LRNwMCxfSzRi3VMlfh0HOF0vSXDgJy+3Z0d/GlhcYvpHAEf99PuO4TNJfrwD7QbLsHq4Imj802DMp4ZkRMeH1zbytkuUkRr28OvIP6T0sSy+i6/9WnxuIkNDkM6MOCuQswR+yIItTCmSaEWclSQUK2dIYUdZ7UDFC8JgbiaR4skVK0KqXW+TRwcphIJCID5g3ElwKYWYP6xxg3WxvWZpplI1XCSvOCi0Dg0/aWz6ibDs/iemreOrjk8vL1pGzju8jY0g/nX7jGjMo9S3Af4tPAgMBAAECggEAUNdsT058SHVWheA/rCOoXRP+Wk5UIirE/R4RNs9OTjP4Yq6gg3Q9p/S4N9fNNzF4nz7VOykI4RKPrVYHjIAaOuyvPg7opVZ36LodFbDqKvLj39O8FSuF8i8RWZioPA6HG1WWNslruh6B0NLirMB0Y4nPzpcrGXkOVogCtPHqtVDrYkR/kQkEAyoxlA3zTCLzRmCmlmjs6/53w1w4cCzxn4INAWEtQjvl0TZ9oE9wa6nRum7e+Bp2rJI+uAAICdVENoh1xnrVYKMx4VscEu9+ZAW/4n+Z7eSkR4dstWmgJpjn6ccxT3gtL5tmDcN583dOh6Ty1CyJ0YTThCRNv+04MQKBgQD6X46j1hfFBxBBSw4GYsCwTfsX6FSiQYh31KBXmHY0vfEdfBN0WNUcTekbmavKr562DFBAmttjLYdDJ+EzH/VO8mQuYhIaMaCPC1PRu/eScFeQaBJzm1ATvcn0kBX6PcEq6lmaQBp1l5QGZp8L28ecqPMGMDBfd3DwfbexTteJlwKBgQC9TJkEm36tkrP3JJIDYhpEiH4dsiFm3S4x7F1a58e/5huKHT+aauUkWgz2a+d82OrKVBUSEWLqeeqBjMIWp/RfsCX8W6qNlFc28LXUAbTpEgaN19f4HrOH8EAPLmkbkBux54o5Fb657jKoTWqfltbX0uO+Qv7AGCWh8z742aaTCQKBgQCDamq1RiedzDJVAy8uXOEk6Rl1mAXsUJdvxlQPBkBtOJF5V2nitMnPHHnRedx4+6tDhL0O2/lxWjFYJ3OF4S1iLco1qlY0F35d9qUdPhsZawwbCPU+ZvQmGIULcCGJAqcEfpNfamw48sHIhk7O66IfcXJ1+g853LiUEni7gVWSqwKBgQCSlQm4Y6AIUB1DNvJJ5GFqyDbAT/tFZ+gpiFoR1oD6u/h/Tn692CBvsbtv5cZvCplk6w8V2pi58IYCozh3yr6UihYf/+tljoSqamKiNGAeSnMAyy7VVxC2JvezycBiM4j+jciew5PY7fYUFT6HLYpXvVnVLpONtCUP7wfIMuGl4QKBgAPSJVmypHOl265pm1F2UQCDz5GgLIUaPXXCUAHIlXMYMk/8m4bD1T2SppXouxPAEj9sJcZtYcEGiHUdo58xw8Y5AwMEakbyv2+etiBDVFCQsacMsHXoOwjXmL9u/2rXEZzWFmPAVVo9k6llNHtIsIu0Z64Zc+/UVY5u4E7qUjqO",

		//异步通知地址
		'notify_url' => "https://supersign.makemeng.com/lib/alipay/notify_url.php",

		//同步跳转
		'return_url' => "https://supersign.makemeng.com/lib/alipay/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAloQ0XLYSSGL1vJbbCgHOOt/d+h2LmPZe+hnyYKhYYzqPTvqdsiH5uRkLJv8LNQ6giPk4aHHfRVsVKtaPXXgjMzz8bKPIrB8Hq15NsNAuoHg8EGK8VzYl01QT9z1IE2i8crIc/0xlwsLb61T/lCsRoPldBeix6if5nWsQbmW2pY5JYqUm0uKDpMoeB/Wg7hCCnnVutBYECXsVryAw8plNiCX6i4yUEkJKdK4D2/0lfgJyg5LGwXCeSzci7nk3OBRLqCLKJNLD0s76bu1zo/d+0kYBDAAiRYO+K0tdpq6S/kPIsnnIE5Ajm91UngAAGugJCYWpZxRvcq27Kv2a20rdHwIDAQAB",
);
