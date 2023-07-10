


@extends('adminlte::page')




@section('title', 'Home')

@section('content_header')
    <h3 class="text-dark text-center p-1">MVP3</h3>
    <h6 class="card-subtitle text-center">Conta:  {{ auth()->user()->name }}</h6>
@stop

@section('content')

  
    <div class="d-flex   gap-3 justify-content-sm-center">

        <div class=" w-5 m-2 shadow-lg " style="width: 18rem; --bs-icon-link-transform: translate3d(0, -.125rem, 0);">
        <a href="{{ route('activity.index') }}" class="">
            <div class="card">
                <h5 class="mt-2  text-center">Registrar Atividade</h5>
                <img alt="Espaço reservado para exibição de imagens" src="data:image/png;base64,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">


                
            </div>
        </a>
            
        </div>

        <div class=" w-5 m-2 shadow-lg " style="width: 18rem;">
            <a href="{{ route('account.index') }}" class="" >
                <div class="card">
                    <h5 class="mt-2 text-center">Registrar Despesas</h5>           
                    <img alt="Espaço reservado para exibição de imagens" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAADPklEQVR4nO2cS27UQBCGfxbAFWZYoPC4QhQeG5LciOQGPAQngGTBLZCQwoRTEFBWLEgkyGQBTCR2hVppS8jKjLttd1fZ/X9SbUaWXf3/7seUVAYIIYQQQohNrgHYAvAOwDGACx/H/rdN7QTHzF0AhwCkIWYA7mgnOzY2AJwFiF+Fu3ZdO+mxsBYpfhU/ANzWTn4MfGghfhXvtZMfOusdxK/iAQpjG8A+gC8AFj0IKFfEXwBPAUx97PjfUjxr4cey509gZrkP4FMiEaQWTvA6u5me7U5Z92CMxwDmmQQQ/9bXmWZ8vhvrIxjBnbl/Zhy8rMglZw7nftarM8s8cFmRS+483JKrvuFKwQaIdvljP+CUEoJECh1Ll/s3nbLeQpGvEaeUoRrQdMpyR1Q1/ixJajJCAyZL7uE0UKMv4WQABuTIUy0hoQE0IITiZoAkDq3x9gYNAA0QzgAuQWpwCQKXIOESZOhUkJjRnoKGgrnxmkuotPGaS6i08ZpLqLTxmkuotPHGJmRuAJGYy58GgAbkhDNAGRqgDA1QpjgDJPL6GwCeA/jWoUDXNdyznwG4jgINeKkofD1eoEADTg0IX8V3FGiAGIvk0ADQgP/RfuPNz4Cx5iM04BIawBkALkHgEqSGcA/gJixDOwXVO+sXHTrTtY+dgzqGhnbWzyI607UFH4wBsZ3188DOdG3BB2FA287684DOdG3BB2HALGFnuhiL5MQ+eDtxZ7oYi+TEPjiks37aoTNdS4jBGBDTWb/bojOdBjQYENNZP2nRmU4DGgz4vUSk6RXX3lpy7S8aoLsEHdGA9gbsrdiEdwI34Tc0oL0BWz0c7Z7QgPYGOA46iH/YcG9uwgEGrLUsRcwDinI0IMAA+MJaTDHuDMDDgPvSgEADqs/RfwwQ/yDic/Q0IMKAik1fXjjyf7JcfPa/rdpwaYDiG7cMzgAagKwvImeAsg4xtZ0cSGkG9PXh1r4ozoCQ2k5OpDQD+qjt5IhR74Vdajs0oAfa1nZoQI/E1nZoQAJCazs0IDH12o62+DL2TdgSYiyKQ4xFcYixKI5TA6Jn/VSBNV4bEL6KVyiQm96EE0XhT7z47tM5hBBCCCEETfwDzpB8a8XkuykAAAAASUVORK5CYII=">


                   
                </div>
             </a>
        </div>

        <div class=" w-5 m-2 shadow-lg" style="width: 18rem;">
            <a href="{{ route('sale.index') }}" class="">
            <div class="card">
                <h5 class="mt-2 text-center">Registrar Vendas</h5>
                <img alt="Espaço reservado para exibição de imagens" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAACcklEQVR4nO2du4pUQRRFl+IjEkUQxGAGFAMFBRMDEUSzwWRMTAzEzMBI/IBJFM2MxcTQ1P8wMDAQxERndGBEBV+IeqTwGlq3CvreXbd7L6iwD6f2qlcn3WCMMcYYY6bHGnBX3cQihx/dsARh+GEJ+vDDEvThhyXoww9L+MtO4Dbwpieo18DSjMP/N9Jn+ljqesjVSXO4A+xiImwHHhcE9BE4OVD4NTvhOPC+oNYTYAcT4H7BZL4CZwcOv0bCaeBzQa1HwDYapiSwn8DqjGrFDCVcBH4U1EpHa5NcL2j+N3Bt5PCjQsIV4FdBrZs0xmq3svsavyUKPyok3ChcSFdphPPA90yzz4B9hbXWBgy/RkJiD/A0UycdVyuISa+YD5kmXwIHGwo/KiUcAF5k6nwBziDiCPAu09wmcLTB8KNSwmHgbabOFnCMkTkEvMo09Qk41XD4USnhRM9OT1/WlhmJvd25/r9mvgHnJhB+VHxjTlzoueueA/sZgQeZJtJL6NKEwo9KCZd7nqkPGYGtBgKLRkfKZnDUk4zGhwVgAfJVGN4B+iDCR5A+jFikO2DRCAvQYgFiLECMBYixADFzKyAm8ky0ACzAOwAfQfgI8h2AL2F8CS8cMa/P0KlgAWIsQIwFiLEAMRYgxgLEWIAYCxBjAWIsQIwFiLEAMRYgxgLEWIAYCxBjAWIsQIwFiLEAMRYgxgLEWIAYCxBjAWIsQIwFiLEAMRYgxgLEWIAYCxBjAWIsQExzAjywgGhgIXgHMOcCNhpYZdHoSL8hPTj3GphoNDpG+UvF3Z2E9QYmHI2M9S78yfzVlTHGGGOMMcYYY4xhdP4AZL8+JuxN+0cAAAAASUVORK5CYII=">


                  
            </div>
        </a>
        </div>
        

            <div class=" w-5 m-2 shadow-lg" style="width: 18rem;">
                <a href="{{ route('cash_flow.consult') }}" class="">
                <div class="card">
                    <h5 class="mt-2 text-center">Fluxo de Caixa</h5>
                    <img alt="Espaço reservado para exibição de imagens" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAGcUlEQVR4nO2da4hVVRSAv8lRK6nohdpQ+OxdkJWZJpTRu+hFGCVCQZpBUVpW0MPSzNBqekA6GP2InlBUmCY5lSVCEJE9LUorLXt4qdRyRtMTG9elYbh733PvXfucfZz9wf4j3v1Ya89a6+yz9joQiUQikUgkEgmHfYGTgQnALGAh8DLwFvAB8D6wGHgJWADMBq4GRgB75T35InIAcBnwBPAFkDTQdgBfAY8DFwL98l5cqOwJjAcWAdsbFLqrdQJLgMuB3nkvOgQOBR4D/vQodFv7BZgjc/DBDAJmmNjyzhwEn3RrHUAr0F9xffdJ38HRT3bdtgAEn3RrW8TJN+q47+/SZ1BcCvxQp3C+Ad4A5gKTgCuAc4DTgLHA+eJDpgDzJEKqd6yvgTF1rnFWt76CYG/g6Trs83wRaiOmYQAwEXge+L3G6KlVgoO0PFChn9w5Bvg85aI7gRdlNzd7mEtviX6WioDTzOlDoCVF37Mtv8+V88SuVlvk3xKnH5bh3IYCzwD/ppjfz8AoR18POn6bGxNSONqdIgTN6KNWjgZeTRkpXVLh93Oq/C4XbhLhuib2aQOOzgcXAxuqzHmbBBJlHkqhuMy5JoXwnwT6Eh4Hig9Ko4S5KX1I5rvIdYywSZxg6NxaxTekdeCZKmAksNUxkV+BEykOFwB/1SDoXBWwP7DWMYk1wHCKxygFJXinqUoUYXb+4RSXU8V0BquA6x2D/wEcT/F5LlQF9Bch2xzVWR7HLlnGNS9zNJkXsgl61jGwORGk4AqYHbITHuuI95cDvQqugEcUhO9VAe2OA7Uj8U/JowJcZztBKOAUx4AzyYaSBwU0yRF0EroCFlkGW59hGkhJWQE+hO9FAUMctv9m5bHOBNokrWSLZ0H0lrVpN3XutSzwN8Wcm2HAu6HvxDwwf6bfeg47xwAbi2AK8mC0ZXE75Q2Txs7f6EH4u40CZlgWZ/IzfYa2SVTALpZbhHGjksNNogLcqSUdFiGZ96qN0mbp24w5FRhID2esRUAbxDk3ympL/9MU+t4tmGQRkMnT12CTpf8ev/PLPGwRkFYG8KaogPqOH65SUsDqaILcrLII6CQlBSxwOGHjB3q8KVpjEdAgJQWM8xCCbpFzpAXSv0+8PwDaMosPUhyj3fOzQLvSE3suCrDl/GhmuA31eBRRbhvlSKVwCvA+gDA6IyVoHhX3dfivwikAEc4yz0ow/WvmlNoUXUgFlDlDbsl8CWz2oATTvwaDLP2bwKVHM1BCWNsZllGuBiMcKfgRdmU7VxKQCVE1GG/p31wIj7Drol4lARmz5vM17aNR+v+bokoCMudPGrxg6d9cmY1gN0HGuWuwzrOT322d8FMKYwy39G1uCu1DgUhyaKcrzHuype+VFIwk4/aO0ryX5ZyiqUaSYTMHi4MV5tziuLCn8deVKUmGwjfXjjSY7siR9Z2er06SQXtbaeeXc0m/t4xjLnAXjsRD2yw15+Z7MAnXOsY9Fg9oC+c1oE8B7ohVolnqF1UafwWe0BT+mwovcko5KmCqY23n+ho0JOHnqYABjgKDHyslqVUkBLMTggJecazvIp8Dh7Lz81TADY71mSpcXglJ+Hko4DjgH8uYHVmUY6hX+IsVzU5etFSpwJhJgdZ6FfCjr8tqGbEf8EmVon6ZbLBGTNDajAvyaZbhWelYVynLdTXqhE2GwFEUy+x85ljPDt9Rj7YCEomfvT2oKHJCiqq72neiq5I2zr+zyv8xtdjuCPi0cEqV0muJlKrMnDTC71PlmLZrM7b1CMLhkCoPWeXW5vNp10Va4VODEkxcfVfOX7VoBm5JWZZsTl7Cp86HrCulLHGalyS311goW+M8f6LjZk73i+i3kTNpd36lcpbrU/qQDVKlaojn6Ga642VKpVAz02jHRj3C72pfa8l23iGXKaZJ9XWN1JHJ8kaslqKrK0N6fqlX+GWa5KprPXU414mDnClmbaT8lRws5q+PnAENkURZk6t5j2Ss2ZKmXG2rHC8E9ZGfRoTfFbOjXq9DKElGbYkUDQkODeF3vwnzXgACT6R9FIqtt6Ep/K6cXeMXLRLltkI+NBE8vk/8BssHcH7KQOjrJXXES/ZC0eklTvZu2Z0aX9XbLhHNLElP2SPvRRbtQ56jgeukmOpSsdffyQNch9QqLcm/rRJH2ip1rccVLUs5EolEIpFIJBKJRCKRSCRCj+A/5pQyljs7gqoAAAAASUVORK5CYII=">


                      
                    
                </div>
            </a>
            </div>

    </div>



@stop
