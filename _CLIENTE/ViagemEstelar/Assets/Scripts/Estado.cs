using System.Collections;
using System.Collections.Generic;
using UnityEngine;

[System.Serializable]
public class Estado {

	[SerializeField]
	private Bar bar;
	[SerializeField]
	private float maximoValor;
	[SerializeField]
	private float valorAtual;

	public float MaximoValor
	{
		get
		{
			return maximoValor;
		}

		set
		{
			this.maximoValor = value;
			bar.MaximoValor = maximoValor;
		}
	}

	public float ValorAtual
	{
		get
		{
			return valorAtual;
		}

		set
		{
			this.valorAtual = Mathf.Clamp(value, 0, maximoValor);
			bar.ValorAtual = valorAtual;
		}
	}

	public void Iniciar()
	{
		this.MaximoValor = maximoValor;
		this.ValorAtual = valorAtual;
	}
}
